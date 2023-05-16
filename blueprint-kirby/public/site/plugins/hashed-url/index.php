<?php
use Kirby\Filesystem\F;

function hashedUrl($path) {
  $file = kirby()->roots()->index() . DIRECTORY_SEPARATOR . $path;
  if (!option('tw.hashed-url', true) || !file_exists($file)) {
    return url($path);
  }
  $asset = dirname($path) . '/';
  $asset .= F::name($path) . '.';
  $asset .= dechex(filemtime($file)) . '.';
  $asset .= F::extension($file);
  return url($asset);
}

Kirby::plugin('tw/hashed-url', []);
