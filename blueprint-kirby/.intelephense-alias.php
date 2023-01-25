<?php
/**
 * Globals don’t work for me, at least I tried.
 *
 * @global Kirby\Cms\Site $site
 * @global Kirby\Cms\Page $page
 * @global Kirby\Cms\Block $block
 */

// A little fix for intelephense
// https://github.com/bmewburn/vscode-intelephense/issues/600
// https://getkirby.com/docs/reference/objects/aliases

// cms classes
class Collection extends Kirby\Cms\Collection {}
class Block      extends Kirby\Cms\Block {}
class Blocks     extends Kirby\Cms\Blocks {}
class Field      extends Kirby\Cms\Field {}
class File       extends Kirby\Cms\File {}
class Files      extends Kirby\Cms\Files {}
class Find       extends Kirby\Cms\Find {}
class Html       extends Kirby\Cms\Html {}
class Kirby      extends Kirby\Cms\App {}
class Page       extends Kirby\Cms\Page {}
class Pages      extends Kirby\Cms\Pages {}
class Pagination extends Kirby\Cms\Pagination {}
class R          extends Kirby\Cms\R {}
class Response   extends Kirby\Cms\Response {}
class S          extends Kirby\Cms\S {}
class Sane       extends Kirby\Sane\Sane {}
class Site       extends Kirby\Cms\Site {}
class Structure  extends Kirby\Cms\Structure {}
class Url        extends Kirby\Cms\Url {}
class User       extends Kirby\Cms\User {}
class Users      extends Kirby\Cms\Users {}
class Visitor    extends Kirby\Cms\Visitor {}

// data handler
class Data      extends Kirby\Data\Data {}
class Json      extends Kirby\Data\Json {}
class Yaml      extends Kirby\Data\Yaml {}

// file classes
class Asset      extends Kirby\Filesystem\Asset {}
class Dir        extends Kirby\Filesystem\Dir {}
class F          extends Kirby\Filesystem\F {}
class Mime       extends Kirby\Filesystem\Mime {}

// data classes
class Database  extends Kirby\Database\Database {}
class Db        extends Kirby\Database\Db {}

// exceptions
class ErrorPageException extends Kirby\Exception\ErrorPageException {}

// http classes
class Cookie     extends Kirby\Http\Cookie {}
class Header     extends Kirby\Http\Header {}
class Remote     extends Kirby\Http\Remote {}

// image classes
class Dimensions extends Kirby\Image\Dimensions {}

// panel classes
class Panel      extends Kirby\Panel\Panel {}

// toolkit classes
class A          extends Kirby\Toolkit\A {}
class C          extends Kirby\Toolkit\Config {}
class Config     extends Kirby\Toolkit\Config {}
class Escape     extends Kirby\Toolkit\Escape {}
class I18n       extends Kirby\Toolkit\I18n {}
class Obj        extends Kirby\Toolkit\Obj {}
class Str        extends Kirby\Toolkit\Str {}
class Tpl        extends Kirby\Toolkit\Tpl {}
class Xml        extends Kirby\Toolkit\Xml {}


/**
* @method static bool accepted($value)
* @method static bool alpha($value, bool $unicode = false)
* @method static bool alphanum($value, bool $unicode = false)
* @method static bool between($value, $min, $max)
* @method static bool contains($value, $needle)
* @method static bool date($value, string $operator = null, string $test = null)
* @method static bool denied($value)
* @method static bool different($value, $other, $strict = false)
* @method static bool email($value)
* @method static bool empty($value = null)
* @method static bool endsWith($value, string $end)
* @method static bool filename($value)
* @method static bool in($value, array $in, bool $strict = false)
* @method static bool integer($value, bool $strict = false)
* @method static bool ip($value)
* @method static bool json($value)
* @method static bool less($value, float $max)
* @method static bool match($value, string $pattern)
* @method static bool max($value, float $max)
* @method static bool maxLength($value, $max)
* @method static bool maxWords($value, $max)
* @method static bool min($value, float $min)
* @method static bool minLength($value, $min)
* @method static bool minWords($value, $min)
* @method static bool more($value, float $min)
* @method static bool notContains($value, $needle)
* @method static bool notEmpty($value)
* @method static bool notIn($value, $notIn)
* @method static bool num($value)
* @method static bool required($value, $array = null)
* @method static bool same($value, $other, bool $strict = false)
* @method static bool size($value, $size, $operator = '==')
* @method static bool startsWith(string $value, string $start)
* @method static bool time($value)
* @method static bool url($value)
* @method static bool uuid(string $value, string $type = null)
*/
class V {}
