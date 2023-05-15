<?php

namespace ImagesBundle\Api;

use ImagesBundle\Api\ApiClient;
use ImagesBundle\Api\Interface\ResponseInterface;

class ColorPizzaApi extends ApiClient {

	protected string $url = "https://api.color.pizza/v1/";

	public function getColorInfo(string | array $colorHex): ResponseInterface {
		if (is_array($colorHex)) {
			$colorHex = implode(",", $colorHex);
		}
		$colorHex = str_replace("#", "", $colorHex);
		return $this->get("", [
			"query" => [
		        "values" => $colorHex,
		        "list" => "bestOf",
		    ]
		]);
	}
}