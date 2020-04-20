<?php

namespace Pantheon\RemoteExt\Commands;

use Pantheon\Terminus\Site\SiteAwareTrait;
use Pantheon\Terminus\Site\SiteAwareInterface;
use Pantheon\Terminus\Commands\TerminusCommand;


class ResolveHostCommand  extends TerminusCommand implements SiteAwareInterface
{
    use SiteAwareTrait;

    /**
     * Resolve remote host
     *
     * @authorize
     *
     * @command remote-ext:resolve-host
     * 
     * @return string
     * 
     * @param string $site_env Site & environment in the format `site-name.env`
     *
     * @usage <site>.<env> -- <command> Runs the Drush command <command> remotely on <site>'s <env> environment.
     */
    public function resolveHostCommand($site_env)
    {
        list($site, $environment) = $this->getSiteEnv($site_env);
        $sftp = $environment->sftpConnectionInfo();
        
        return implode("\n", gethostbynamel($sftp['host']));
    }
}
