# Terminus Remote Extra Plugin

Provides additional remote features to drush and wp cli

Learn more about Terminus and Terminus Plugins at:
[https://pantheon.io/docs/terminus/plugins/](https://pantheon.io/docs/terminus/plugins/)

## Configuration

This plugin requires no configuration to use.

## Commands

### remote-ext:resolve-host

Resolve sFTP host to IP using [`gethostbynamel`](https://www.php.net/manual/en/function.gethostbynamel.php)
```
terminus remote-ext:resolve-host site.env
```


### remote-ext:drush

Extends `terminus remote:drush`. Add `ssh_host` option.
```
terminus remote-ext:drush --ssh_host=[IP|HOST] site.env
```

### remote-ext:wp

Extends `terminus remote:wp`. Add `ssh_host` option
```
terminus remote-ext:wp --ssh_host=[IP|HOST] site.env
```


## Installation
For help installing, see [Manage Plugins](https://pantheon.io/docs/terminus/plugins/)
```
mkdir -p ~/.terminus/plugins
cd ~/.terminus/plugins
git clone https://github.com/marfillaster/terminus-remote-ext.git
```
