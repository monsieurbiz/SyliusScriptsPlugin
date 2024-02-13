<?php

/*
 * This file is part of Monsieur Biz' Scripts plugin for Sylius.
 * (c) Monsieur Biz <sylius@monsieurbiz.com>
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace MonsieurBiz\SyliusScriptsPlugin\Form\Type\Settings;

use MonsieurBiz\SyliusSettingsPlugin\Form\AbstractSettingsType;
use MonsieurBiz\SyliusSettingsPlugin\Form\SettingsTypeInterface;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;

class ScriptsType extends AbstractSettingsType implements SettingsTypeInterface
{
    /**
     * @SuppressWarnings(PHPMD.UnusedFormalParameters)
     */
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $this->addWithDefaultCheckbox(
            $builder,
            'before_head_end',
            TextareaType::class,
            [
                'label' => 'monsieurbiz_scripts.form.before_head_end',
                'required' => false,
            ]
        );
        $this->addWithDefaultCheckbox(
            $builder,
            'after_body_start',
            TextareaType::class,
            [
                'label' => 'monsieurbiz_scripts.form.after_body_start',
                'required' => false,
            ]
        );
        $this->addWithDefaultCheckbox(
            $builder,
            'before_body_end',
            TextareaType::class,
            [
                'label' => 'monsieurbiz_scripts.form.before_body_end',
                'required' => false,
            ]
        );
        $this->addWithDefaultCheckbox(
            $builder,
            'checkout_success',
            TextareaType::class,
            [
                'label' => 'monsieurbiz_scripts.form.checkout_success',
                'required' => false,
                'help' => 'monsieurbiz_scripts.form.checkout_success_help',
                'help_html' => true,
            ]
        );
    }
}
