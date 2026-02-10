<?php

/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PCL
 */

namespace OpenDxp\Bundle\ObjectMergerBundle;

use OpenDxp\Bundle\ObjectMergerBundle\DependencyInjection\OpenDxpObjectMergerExtension;
use OpenDxp\Extension\Bundle\AbstractOpenDxpBundle;
use OpenDxp\Extension\Bundle\OpenDxpBundleAdminClassicInterface;
use OpenDxp\Extension\Bundle\Traits\BundleAdminClassicTrait;
use OpenDxp\Extension\Bundle\Traits\PackageVersionTrait;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;

class OpenDxpObjectMergerBundle extends AbstractOpenDxpBundle implements OpenDxpBundleAdminClassicInterface
{
    use BundleAdminClassicTrait;
    use PackageVersionTrait;

    public function getContainerExtension(): ExtensionInterface
    {
        if ($this->extension === null) {
            $this->extension = new OpenDxpObjectMergerExtension();
        }

        return $this->extension;
    }

    protected function getComposerPackageName(): string
    {
        return 'open-dxp/object-merger-bundle';
    }

    public function getCssPaths(): array
    {
        return [
            '/bundles/opendxpobjectmerger/css/admin.css',
            '/bundles/opendxpobjectmerger/css/icons.css',
        ];
    }

    public function getJsPaths(): array
    {
        return [
            '/bundles/opendxpobjectmerger/js/plugin.js',
            '/bundles/opendxpobjectmerger/js/panel.js',
            '/bundles/opendxpobjectmerger/js/grideditor.js',

        ];
    }
}
