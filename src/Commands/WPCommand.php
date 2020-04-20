<?php

namespace Pantheon\RemoteExt\Commands;

class WPCommand extends SSHBaseCommand
{
    /**
     * @inheritdoc
     */
    protected $command = 'wp';

    /**
     * Runs a WP-CLI command remotely on a site's environment.
     *
     * @authorize
     *
     * @command remote-ext:wp
     *
     * @param string $site_env Site & environment in the format `site-name.env`
     * @param array $wp_command WP-CLI command
     * @param array $options Commandline options
     * @option progress Allow progress bar to be used (tty mode only)
     * @option ssh_host Specify hostname/IP on multi container environment
     * @return string Command output
     *
     * @usage <site>.<env> -- <command> Runs the WP-CLI command <command> remotely on <site>'s <env> environment.
     * @usage <site>.<env> --progress -- <command> Runs a WP-CLI command with a progress bar
     */
    public function wpCommand($site_env, array $wp_command, array $options = ['progress' => false, 'ssh_host' => ''])
    {
        $this->prepareEnvironment($site_env);
        $this->setProgressAllowed($options['progress']);
        return $this->executeCommand($wp_command, ['ssh_host' => $options['ssh_host']]);
    }
}
