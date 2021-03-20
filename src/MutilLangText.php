<?php

namespace Dartmoon\Utils;

use PrestaShop\PrestaShop\Adapter\Entity\Language;

class MultiLangText
{
    /**
     * Prepare multilanguage string
     */
    public function generate($text)
    {
        $translatedNames = [];
        foreach (Language::getLanguages() as $lang) {
            // In case we just receive a string, we apply it to all languages
            if (!is_array($text)) {
                $translatedNames[$lang['id_lang']] = $text;
            } elseif (array_key_exists($lang['locale'], $text)) {
                $translatedNames[$lang['id_lang']] = $text[$lang['locale']];
            } elseif (array_key_exists($lang['language_code'], $text)) {
                $translatedNames[$lang['id_lang']] = $text[$lang['language_code']];
            } elseif (array_key_exists($lang['iso_code'], $text)) {
                $translatedNames[$lang['id_lang']] = $text[$lang['iso_code']];
            } elseif (array_key_exists($lang['id_lang'], $text)) {
                $translatedNames[$lang['id_lang']] = $text[$lang['id_lang']];
            } else {
                $translatedNames[$lang['id_lang']] = reset($text); // Get the first name available in the array
            }
        }

        return $translatedNames;
    }

}