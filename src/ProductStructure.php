<?php

namespace App;

class ProductStructure
{
    const products = [
        "preto-PP",
        "preto-M",
        "preto-G",
        "preto-GG",
        "preto-GG",
        "branco-PP",
        "branco-G",
        "vermelho-M",
        "azul-XG",
        "azul-XG",
        "azul-XG",
        "azul-P"
    ];

    public function make(): array
    {
        $filtered_products = array();

        foreach (self::products as $product) {
            if (!strpos($product, "-")) {
                continue;
            }

            list($color, $size) = explode("-", $product);

            if (!array_key_exists($color, $filtered_products)) {
                $filtered_products[$color] = array();
            }

            if (!array_key_exists($size, $filtered_products[$color])) {
                $filtered_products[$color][$size] = 0;
            }

            $filtered_products[$color][$size] += 1;
        }

        return $filtered_products;
    }
}
