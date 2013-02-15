<?php
/**
 * Simple i18n lib to test differents locales when building pages
 *
 * @version 0.1
 * @package i18n
 * @author MAD <mdugue@clever-age.com>
 */

/**
 * Usage
 * -----
 *
 * This lib uses a JSON config file named 'i18n.json' at the project's root.
 * The config file cnotains a simple object, that contains :
 * - the configuration : `config`
 * - the different translations : `translations`
 *   It uses a simple convention : each localizable string is used as key and
 *   is associated w/ an object within each key is a locale as in the following
 *   example :
 *
 *     "translations": {
 *       "Bonjour": {
 *         "fr": "Salutations",
 *         "en": "Hi Buddy!"
 *       }
 *     }
 *
 * We use a JSON object because it'll less verbose to maintain and contribute
 * during the dev time than a PHP array. Either, we prefer to use the
 * localizable string as the root key because when you're working on a project
 * and you need to add a new string to localize, it's more simple to add it at
 * a unique point and then fill the desired translations than to add it in the
 * <n> arrays, one for each locale.
 *
 * To localize a string in your layouts, simply use the given `_t` function and
 * pass the string to localize to it. It will render the localized string if
 * available, or `[[given string]]` as fallback.
 *
 * To change the displayed locale, add the GET parameter `lang` to your URL w/
 * the desired locale (e.g. ?lang=en).
 */

/**
 * Load the configuration
 */
$i18n_json = file_get_contents('../json/i18n.json');
$i18n      = json_decode($i18n_json, true);

/**
 * Set the lang
 */
$i18n_lang = isset($_GET['lang'])? $_GET['lang'] : $i18n['config']['default'];

/**
 * The translate `_t` function
 *
 * @param  string $string   the string to localize
 * @param  string $lang     a lang-code to bypass the default lang (optionnal)
 * @return string           the localized string
 */
function _t ($string, $lang = null) {
  // Load translations
  $t = $GLOBALS['i18n']['translations'];
  $l = '<span class="todo">'.$string.'</span>';

  // Choose the lang to use
  $lang = is_null($lang)? $GLOBALS['i18n_lang'] : $lang;

  // Try to find the string subject in the table
  if (!array_key_exists($string, $t))
    return $l;

  // Try to find the lang for the string subject
  if (!array_key_exists($lang, $t[$string]))
    return $l;

  // Finaly, return the translation
    return $l = $t[$string][$lang];
}

