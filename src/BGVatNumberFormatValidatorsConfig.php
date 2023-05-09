<?php

namespace rocketfellows\BGVatNumberFormatValidatorsConfig;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use rocketfellows\BGVatFormatValidator\BGVatFormatValidator;
use rocketfellows\CountryVatFormatValidatorInterface\CountryVatFormatValidatorInterface;
use rocketfellows\SpecificCountryVatNumberFormatValidatorsConfig\SpecificCountryVatNumberFormatValidatorsConfig;

class BGVatNumberFormatValidatorsConfig extends SpecificCountryVatNumberFormatValidatorsConfig
{
    public function getCountry(): Country
    {
        return ISO3166::BG();
    }

    protected function getDefaultValidator(): CountryVatFormatValidatorInterface
    {
        return new BGVatFormatValidator();
    }
}
