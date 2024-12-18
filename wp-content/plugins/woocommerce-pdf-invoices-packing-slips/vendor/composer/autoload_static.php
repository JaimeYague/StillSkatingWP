<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1066d81cd8f355258ef5165247019e8a
{
    public static $files = array (
        '383eaff206634a77a1be54e64e6459c7' => __DIR__ . '/..' . '/sabre/uri/lib/functions.php',
        '3569eecfeed3bcf0bad3c998a494ecb8' => __DIR__ . '/..' . '/sabre/xml/lib/Deserializer/functions.php',
        '93aa591bc4ca510c520999e34229ee79' => __DIR__ . '/..' . '/sabre/xml/lib/Serializer/functions.php',
        'def43f6c87e4f8dfd0c9e1b1bab14fe8' => __DIR__ . '/..' . '/symfony/polyfill-iconv/bootstrap.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WPO\\WC\\UBL\\' => 11,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Iconv\\' => 23,
            'Svg\\' => 4,
            'Sabre\\Xml\\' => 10,
            'Sabre\\Uri\\' => 10,
            'Sabberworm\\CSS\\' => 15,
        ),
        'M' => 
        array (
            'Masterminds\\' => 12,
        ),
        'F' => 
        array (
            'FontLib\\' => 8,
        ),
        'D' => 
        array (
            'Dompdf\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WPO\\WC\\UBL\\' => 
        array (
            0 => __DIR__ . '/../..' . '/ubl',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Iconv\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-iconv',
        ),
        'Svg\\' => 
        array (
            0 => __DIR__ . '/..' . '/dompdf/php-svg-lib/src/Svg',
        ),
        'Sabre\\Xml\\' => 
        array (
            0 => __DIR__ . '/..' . '/sabre/xml/lib',
        ),
        'Sabre\\Uri\\' => 
        array (
            0 => __DIR__ . '/..' . '/sabre/uri/lib',
        ),
        'Sabberworm\\CSS\\' => 
        array (
            0 => __DIR__ . '/..' . '/sabberworm/php-css-parser/src',
        ),
        'Masterminds\\' => 
        array (
            0 => __DIR__ . '/..' . '/masterminds/html5/src',
        ),
        'FontLib\\' => 
        array (
            0 => __DIR__ . '/..' . '/dompdf/php-font-lib/src/FontLib',
        ),
        'Dompdf\\' => 
        array (
            0 => __DIR__ . '/..' . '/dompdf/dompdf/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Dompdf\\Cpdf' => __DIR__ . '/..' . '/dompdf/dompdf/lib/Cpdf.php',
        'WPO\\WC\\PDF_Invoices\\Admin' => __DIR__ . '/../..' . '/includes/class-wcpdf-admin.php',
        'WPO\\WC\\PDF_Invoices\\Assets' => __DIR__ . '/../..' . '/includes/class-wcpdf-assets.php',
        'WPO\\WC\\PDF_Invoices\\Compatibility\\Order_Util' => __DIR__ . '/../..' . '/includes/compatibility/class-wcpdf-order-util.php',
        'WPO\\WC\\PDF_Invoices\\Compatibility\\Third_Party_Plugins' => __DIR__ . '/../..' . '/includes/compatibility/class-wcpdf-compatibility-third-party-plugins.php',
        'WPO\\WC\\PDF_Invoices\\Documents' => __DIR__ . '/../..' . '/includes/class-wcpdf-documents.php',
        'WPO\\WC\\PDF_Invoices\\Documents\\Bulk_Document' => __DIR__ . '/../..' . '/includes/documents/class-wcpdf-bulk-document.php',
        'WPO\\WC\\PDF_Invoices\\Documents\\Document_Number' => __DIR__ . '/../..' . '/includes/documents/class-wcpdf-document-number.php',
        'WPO\\WC\\PDF_Invoices\\Documents\\Invoice' => __DIR__ . '/../..' . '/includes/documents/class-wcpdf-invoice.php',
        'WPO\\WC\\PDF_Invoices\\Documents\\Order_Document' => __DIR__ . '/../..' . '/includes/documents/abstract-wcpdf-order-document.php',
        'WPO\\WC\\PDF_Invoices\\Documents\\Order_Document_Methods' => __DIR__ . '/../..' . '/includes/documents/abstract-wcpdf-order-document-methods.php',
        'WPO\\WC\\PDF_Invoices\\Documents\\Packing_Slip' => __DIR__ . '/../..' . '/includes/documents/class-wcpdf-packing-slip.php',
        'WPO\\WC\\PDF_Invoices\\Documents\\Sequential_Number_Store' => __DIR__ . '/../..' . '/includes/documents/class-wcpdf-sequential-number-store.php',
        'WPO\\WC\\PDF_Invoices\\Endpoint' => __DIR__ . '/../..' . '/includes/class-wcpdf-endpoint.php',
        'WPO\\WC\\PDF_Invoices\\Font_Synchronizer' => __DIR__ . '/../..' . '/includes/class-wcpdf-font-synchronizer.php',
        'WPO\\WC\\PDF_Invoices\\Frontend' => __DIR__ . '/../..' . '/includes/class-wcpdf-frontend.php',
        'WPO\\WC\\PDF_Invoices\\Install' => __DIR__ . '/../..' . '/includes/class-wcpdf-install.php',
        'WPO\\WC\\PDF_Invoices\\Main' => __DIR__ . '/../..' . '/includes/class-wcpdf-main.php',
        'WPO\\WC\\PDF_Invoices\\Makers\\PDF_Maker' => __DIR__ . '/../..' . '/includes/makers/class-pdf-maker.php',
        'WPO\\WC\\PDF_Invoices\\Makers\\UBL_Maker' => __DIR__ . '/../..' . '/includes/makers/class-ubl-maker.php',
        'WPO\\WC\\PDF_Invoices\\Settings' => __DIR__ . '/../..' . '/includes/class-wcpdf-settings.php',
        'WPO\\WC\\PDF_Invoices\\Settings\\Settings_Callbacks' => __DIR__ . '/../..' . '/includes/settings/class-wcpdf-settings-callbacks.php',
        'WPO\\WC\\PDF_Invoices\\Settings\\Settings_Debug' => __DIR__ . '/../..' . '/includes/settings/class-wcpdf-settings-debug.php',
        'WPO\\WC\\PDF_Invoices\\Settings\\Settings_Documents' => __DIR__ . '/../..' . '/includes/settings/class-wcpdf-settings-documents.php',
        'WPO\\WC\\PDF_Invoices\\Settings\\Settings_General' => __DIR__ . '/../..' . '/includes/settings/class-wcpdf-settings-general.php',
        'WPO\\WC\\PDF_Invoices\\Settings\\Settings_UBL' => __DIR__ . '/../..' . '/includes/settings/class-wcpdf-settings-ubl.php',
        'WPO\\WC\\PDF_Invoices\\Settings\\Settings_Upgrade' => __DIR__ . '/../..' . '/includes/settings/class-wcpdf-settings-upgrade.php',
        'WPO\\WC\\PDF_Invoices\\Setup_Wizard' => __DIR__ . '/../..' . '/includes/class-wcpdf-setup-wizard.php',
        'WPO\\WC\\PDF_Invoices\\Tables\\Number_Store_List_Table' => __DIR__ . '/../..' . '/includes/tables/class-wcpdf-number-store-list-table.php',
        'WPO\\WC\\PDF_Invoices\\Updraft_Semaphore_3_0' => __DIR__ . '/../..' . '/includes/class-wcpdf-updraft-semaphore.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1066d81cd8f355258ef5165247019e8a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1066d81cd8f355258ef5165247019e8a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1066d81cd8f355258ef5165247019e8a::$classMap;

        }, null, ClassLoader::class);
    }
}
