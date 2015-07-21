<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

class M2_Sniffs_Arrays_ShortArraySyntaxSniff implements PHP_CodeSniffer_Sniff
{
    /**
     * {@inheritdoc}
     */
    public function register()
    {
        return [T_ARRAY];
    }

    /**
     * {@inheritdoc}
     */
    public function process(PHP_CodeSniffer_File $sourceFile, $stackPtr)
    {
        $sourceFile->addError('Short array syntax must be used; expected "[]" but found "array()"', $stackPtr);
    }
}
