# SteamAuth
[![PHP Lint](https://github.com/Banakin/SteamAuth/workflows/PHP%20Lint/badge.svg)](https://github.com/Banakin/SteamAuth/actions)

**SteamAuth** is a MediaWiki extension that allows users to sign in with Steam. This extension uses [PluggableAuth](https://www.mediawiki.org/wiki/Extension:PluggableAuth). 

This extension is designed to be used as the only form of authentication for your wiki.


## Installation
⚠ **NOTE** This extension requires [PluggableAuth](https://www.mediawiki.org/wiki/Extension:PluggableAuth) to be installed first.

- [Download](https://github.com/Banakin/SteamAuth/releases/) and place the file(s) in a directory called `SteamAuth` in your `extensions/` folder.
- Add the following code at the bottom of your [LocalSettings.php](https://www.mediawiki.org/wiki/Manual:LocalSettings.php):
  ```php
  wfLoadExtension( 'SteamAuth' );
  ```
- [Configure as required](#configuration)
- ✔ Done – Navigate to [Special:Version](https://www.mediawiki.org/wiki/Special:Version) on your wiki to verify that the extension is successfully installed.


## Configuration
⚠ **NOTE** Disabling normal account creation is strongly recommended. You can do so by adding the following line to the bottom of your [LocalSettings.php](https://www.mediawiki.org/wiki/Manual:LocalSettings.php):
```php
$wgGroupPermissions['*']['createaccount'] = false;
```

| Flag | Default | Description |
|:-:|:-:|:-:|
| $wgSteamAuth_Key | "key" | Your steam developer API key (Available [here](https://steamcommunity.com/dev/apikey)) |
| $wgSteamAuth_AppID | null | **(Optional)** If set, only users that have this app/game in their Steam library can login and create accounts. |
