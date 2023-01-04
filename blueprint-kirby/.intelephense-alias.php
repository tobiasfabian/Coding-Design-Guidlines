<?php
/**
 * @global Kirby\Cms\Site $site
 * @global Kirby\Cms\Page $page
 */

// A little fix for intelephense
// https://github.com/bmewburn/vscode-intelephense/issues/600

// cms classes
class collection extends Kirby\Cms\Collection {}
class Block      extends Kirby\Cms\Block {}
class Blocks     extends Kirby\Cms\Blocks {}
class field      extends Kirby\Cms\Field {}
class file       extends Kirby\Cms\File {}
class files      extends Kirby\Cms\Files {}
class find       extends Kirby\Cms\Find {}
class html       extends Kirby\Cms\Html {}
class Kirby      extends Kirby\Cms\App {}
class Page       extends Kirby\Cms\Page {}
class Pages      extends Kirby\Cms\Pages {}
class pagination extends Kirby\Cms\Pagination {}
class r          extends Kirby\Cms\R {}
class response   extends Kirby\Cms\Response {}
class s          extends Kirby\Cms\S {}
class sane       extends Kirby\Sane\Sane {}
class Site       extends Kirby\Cms\Site {}
class structure  extends Kirby\Cms\Structure {}
class url        extends Kirby\Cms\Url {}
class user       extends Kirby\Cms\User {}
class users      extends Kirby\Cms\Users {}
class visitor    extends Kirby\Cms\Visitor {}

// data handler
class data      extends Kirby\Data\Data {}
class json      extends Kirby\Data\Json {}
class yaml      extends Kirby\Data\Yaml {}

// file classes
class asset      extends Kirby\Filesystem\Asset {}
class dir        extends Kirby\Filesystem\Dir {}
class F          extends Kirby\Filesystem\F {}
class mime       extends Kirby\Filesystem\Mime {}

// data classes
class database  extends Kirby\Database\Database {}
class db        extends Kirby\Database\Db {}

// exceptions
class errorpageexception extends Kirby\Exception\ErrorPageException {}

// http classes
class cookie     extends Kirby\Http\Cookie {}
class header     extends Kirby\Http\Header {}
class remote     extends Kirby\Http\Remote {}

// image classes
class dimensions extends Kirby\Image\Dimensions {}

// panel classes
class panel      extends Kirby\Panel\Panel {}

// toolkit classes
class a          extends Kirby\Toolkit\A {}
class c          extends Kirby\Toolkit\Config {}
class config     extends Kirby\Toolkit\Config {}
class escape     extends Kirby\Toolkit\Escape {}
class i18n       extends Kirby\Toolkit\I18n {}
class obj        extends Kirby\Toolkit\Obj {}
class str        extends Kirby\Toolkit\Str {}
class tpl        extends Kirby\Toolkit\Tpl {}
class v          extends Kirby\Toolkit\V {}
class xml        extends Kirby\Toolkit\Xml {}

