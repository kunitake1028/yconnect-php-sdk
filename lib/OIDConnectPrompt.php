<?php
/**
 * The MIT License (MIT)
 * 
 * Copyright (C) 2013 Yahoo Japan Corporation. All Rights Reserved. 
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

/** \file OIDConnectPrompt.php
 *
 * \brief promptの列挙型クラスです.
 */

/**
 * \class OIDConnectPromptクラス
 *
 * \brief promptの列挙型クラスです.
 */
class OIDConnectPrompt
{
    /**
     * \public \brief login: ログイン
     */
    const LOGIN = "login";

    /**
     * \public \brief consent: ユーザの認可
     */
    const CONSENT = "consent";

    /**
     * \public \brief none: 非表示
     */
    const NONE = "none";

    /**
     * \public \brief 空文字列: 未指定
     */
    const DEFAULT_PROMPT = "";
}

/* vim:ts=4:sw=4:sts=0:tw=0:ft=php:set et: */
