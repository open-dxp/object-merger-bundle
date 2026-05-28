<?php

/**
 * OpenDXP
 *
 * This source file is licensed under the GNU General Public License version 3 (GPLv3).
 *
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @copyright  Copyright (c) Pimcore GmbH (https://pimcore.com)
 * @copyright  Modification Copyright (c) OpenDXP (https://www.opendxp.io)
 * @license    https://www.gnu.org/licenses/gpl-3.0.html  GNU General Public License version 3 (GPLv3)
 */

namespace OpenDxp\Bundle\ObjectMergerBundle;

use OpenDxp\Bundle\ObjectMergerBundle\DependencyInjection\OpenDxpObjectMergerExtension;
use OpenDxp\Extension\Bundle\AbstractOpenDxpBundle;
use OpenDxp\Extension\Bundle\OpenDxpBundleAdminClassicInterface;
use OpenDxp\Extension\Bundle\Traits\BundleAdminClassicTrait;
use OpenDxp\Extension\Bundle\Traits\PackageVersionTrait;
use Override;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;

class OpenDxpObjectMergerBundle extends AbstractOpenDxpBundle implements OpenDxpBundleAdminClassicInterface
{
    use BundleAdminClassicTrait;
    use PackageVersionTrait;

    #[Override]
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
