<?php

declare(strict_types=1);

namespace ShipperHQ\AddressAutocomplete\Plugin\HyvaCheckout;

class DisableFieldAutosave
{
    public function afterisAutoSave(
        \Hyva\Checkout\Model\Form\EntityField\EavAttributeField $subject,
        $result
    )
    {
        $test = $subject->getAttributeCode();
        if ($subject->getAttributeCode() == 'street.0') {
            return false;
        }
        return $result;
    }
}
