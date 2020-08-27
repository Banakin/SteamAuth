<?php
class Setup {
    public static function init() {
		$GLOBALS["wgPluggableAuth_ExtraLoginFields"] = [
            "steam" => [
                "type" => "hidden",
                "value" => true
            ]
        ];
	}
}