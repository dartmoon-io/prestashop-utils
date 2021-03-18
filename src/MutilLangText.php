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
        $languages = Language::getLanguages();
        $multilang = [];
        foreach ($languages as $lang) {
            $multilang[$lang['id_lang']] = $text;
        }
        return $multilang;
    }

}