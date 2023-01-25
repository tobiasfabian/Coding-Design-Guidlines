<?php
/**
 * @global Kirby\Cms\Site $site
 * @global Kirby\Cms\Page $page
 */

// A little fix for intelephense
// https://github.com/bmewburn/vscode-intelephense/issues/600

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
class V          extends Kirby\Toolkit\V {}
class Xml        extends Kirby\Toolkit\Xml {}
