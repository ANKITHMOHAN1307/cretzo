<?php

$language = get_languages();
$cookie_lang = $this->input->cookie('language', TRUE);
$language_index = 0;
if (!empty($cookie_lang)) {
    $language_index = array_search($cookie_lang, array_column($language, "language"));
}

$auth_settings = get_settings('authentication_settings', true);

?>

<input type="hidden" id="currency" class="form-control" value="<?= $settings['currency'] ?>">
<input type="hidden" id="auth_settings" name="auth_settings" value='<?= isset($auth_settings['authentication_method']) ? $auth_settings['authentication_method'] : ''; ?>'>

<input type="hidden" name="is_loggedin" id="is_loggedin" value="<?= (isset($user->id)) ? 1 : 0 ?>">