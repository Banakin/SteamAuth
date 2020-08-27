### To install
First download and place the contents of this repository into a folder called `SteamAuth` inside of your `/extensions` folder (This plugin requires [PlugableAuth](https://www.mediawiki.org/wiki/Extension:PluggableAuth))

Then add the following line to the bottom of your `LocalSettings.php`
`wfLoadExtension('SteamAuth');`

### Config
$wgSteamAuth_Key (default: "key") - Required* The key of your steam api (available at [this link](https://steamcommunity.com/dev/apikey))
$wgSteamAuth_AppID (default: null) - Optional* The ID of the game users are required to have in order to log in. (If not set users wont need a specific game)