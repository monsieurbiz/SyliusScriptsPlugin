<p align="center">
    <a href="https://monsieurbiz.com" target="_blank">
        <img src="https://monsieurbiz.com/logo.png" width="250px" alt="Monsieur Biz logo" />
    </a>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <a href="https://monsieurbiz.com/agence-web-experte-sylius" target="_blank">
        <img src="https://demo.sylius.com/assets/shop/img/logo.png" width="200px" alt="Sylius logo" />
    </a>
    <br/>
    <img src="https://monsieurbiz.com/assets/images/sylius_badge_extension-artisan.png" width="100" alt="Monsieur Biz is a Sylius Extension Artisan partner">
</p>

<h1 align="center">Scripts Settings for Sylius</h1>

[![Scripts Plugin license](https://img.shields.io/github/license/monsieurbiz/SyliusScriptsPlugin?public)](https://github.com/monsieurbiz/SyliusScriptsPlugin/blob/master/LICENSE.txt)
[![Tests Status](https://img.shields.io/github/actions/workflow/status/monsieurbiz/SyliusScriptsPlugin/tests.yaml?branch=master&logo=github)](https://github.com/monsieurbiz/SyliusScriptsPlugin/actions?query=workflow%3ATests)
[![Recipe Status](https://img.shields.io/github/actions/workflow/status/monsieurbiz/SyliusScriptsPlugin/recipe.yaml?branch=master&label=recipes&logo=github)](https://github.com/monsieurbiz/SyliusScriptsPlugin/actions?query=workflow%3ASecurity)
[![Security Status](https://img.shields.io/github/actions/workflow/status/monsieurbiz/SyliusScriptsPlugin/security.yaml?branch=master&label=security&logo=github)](https://github.com/monsieurbiz/SyliusScriptsPlugin/actions?query=workflow%3ASecurity)

This plugin lets you add JS scripts from the admin panel. You can add scripts to the header or the footer of your website.  
For example, add Google Analytics, Facebook Pixel, or any other tracking script.

## Compatibility

| Sylius Version | PHP Version |
|---|---|
| 1.11 | 8.0 - 8.1 |
| 1.12 | 8.1 - 8.2 |
| 1.13 | 8.1 - 8.2 |

## Installation

If you want to use our recipes, you can configure your composer.json by running:

```bash
composer config --no-plugins --json extra.symfony.endpoint '["https://api.github.com/repos/monsieurbiz/symfony-recipes/contents/index.json?ref=flex/master","flex://defaults"]'
```

```bash
composer require monsieurbiz/sylius-scripts-plugin
```

Create the config file in `config/packages/monsieurbiz_sylius_scripts_plugin.yaml`:

```yaml
imports:
    resource: '@MonsieurBizSyliusScriptsPlugin/Resources/config/config.yaml'
```

# Configuration

Go to the admin panel, then `Settings` > `Scripts` and add your scripts:

![Screenshot of the scripts form in admin panel](./docs/images/admin.png)

And that's it! Your scripts will be added:

![Screenshot of the shop example](./docs/images/front_example.png)

# How to

## Change the default settings values for your project

Open the `config/packages/monsieurbiz_sylius_scripts_plugin.yaml` file and change the default values. For example:

```yaml
monsieurbiz_sylius_settings:
    plugins:
        monsieurbiz_scripts.scripts:
            default_values:
                before_head_end: |
                    <script type="text/javascript">console.log('My script');</script>
```
