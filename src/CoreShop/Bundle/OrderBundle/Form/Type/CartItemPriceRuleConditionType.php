<?php

declare(strict_types=1);

/*
 * CoreShop
 *
 * This source file is available under two different licenses:
 *  - GNU General Public License version 3 (GPLv3)
 *  - CoreShop Commercial License (CCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @copyright  Copyright (c) CoreShop GmbH (https://www.coreshop.org)
 * @license    https://www.coreshop.org/license     GPLv3 and CCL
 *
 */

namespace CoreShop\Bundle\OrderBundle\Form\Type;

use CoreShop\Bundle\RuleBundle\Form\Type\RuleConditionType;
use Symfony\Component\Form\FormBuilderInterface;

final class CartItemPriceRuleConditionType extends RuleConditionType
{
    public function buildForm(FormBuilderInterface $builder, array $options = []): void
    {
        parent::buildForm($builder, $options);

        $builder
            ->add('type', CartItemPriceRuleConditionChoiceType::class, [
                'attr' => [
                    'data-form-collection' => 'update',
                ],
            ])
        ;
    }

    public function getBlockPrefix(): string
    {
        return 'coreshop_cart_item_price_rule_condition';
    }
}