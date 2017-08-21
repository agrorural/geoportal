/* joii 3.2.0 2016-11-07 */
"use strict";!function(a,b){a.JOII="undefined"!=typeof a.JOII?a.JOII:{},a.JOII.Compat={},a.JOII.Compat.findJOIIName=function(b){var c,d;if("string"==typeof b||"number"==typeof b||"undefined"==typeof b||null===b)return!1;if("undefined"!=typeof b.__joii__)return b.__joii__.name;if("undefined"!=typeof b.prototype&&"undefined"!=typeof b.prototype.__joii__)return b.prototype.__joii__.name;if("undefined"!=typeof b.__proto__&&(d=a.JOII.Compat.findJOIIName(b.__proto__),"string"==typeof d))return d;"function"==typeof b&&(b=b.prototype);for(c in b)if(("function"==typeof b[c]||"object"==typeof b[c])&&(d=a.JOII.Compat.findJOIIName(b[c]),"string"==typeof d))return d;return!1},a.JOII.Compat.indexOf=function(a,b){if("function"==typeof a.indexOf)return a.indexOf(b);var c=a.length>>>0,d=Number(arguments[1])||0;for(d=d<0?Math.ceil(d):Math.floor(d),d=d<0?d+c:d;d<c;d++)if(d in a&&a[d]===b)return d;return-1},a.JOII.Compat.extend=function(){var c,d,e,f,g=!1,h=arguments[0]||{},i=1,j=arguments.length,k=!1;for("boolean"==typeof h&&(k=h,h=arguments[i]||{},i++),"object"!=typeof h&&"function"!=typeof h&&(h={});i<j;i++)if(null!==(c=arguments[i])&&arguments[i]!==b){"undefined"!=typeof c.__joii__&&a.JOII.CreateProperty(h,"__joii__",c.__joii__);for(var l in c)d=h[l],e=c[l],h!==e&&(k&&e&&(a.JOII.Compat.isPlainObject(e)||(g=a.JOII.Compat.isArray(e)))?(g?(g=!1,f=d&&a.JOII.Compat.isArray(d)?d:[]):f=d&&a.JOII.Compat.isPlainObject(d)?d:{},h[l]=a.JOII.Compat.extend(k,f,e)):e!==b&&(h[l]=e))}return h},a.JOII.Compat.isArray=function(a){var b=a.length,c=typeof a;return"function"!==c&&("undefined"==typeof window||a!==window)&&(!(1!==a.nodeType||!b)||"[object Array]"===Object.prototype.toString.call(a))},a.JOII.Compat.isPlainObject=function(a){var b={}.hasOwnProperty;return!("object"!=typeof a||a.nodeType||"undefined"!=typeof window&&a===window)&&!(a.constructor&&!b.call(a.constructor.prototype,"isPrototypeOf"))},a.JOII.Compat.CreateObject=function(a){if("function"==typeof Object.create)return Object.create(a);var b=function(a){function b(){}return function(a){if(1!=arguments.length)throw new Error("g.JOII.Compat.CreateObject implementation only accepts one parameter.");return b.prototype=a,new b}}();return b(a)},a.JOII.Compat.Bind=function(a,b){if("function"!=typeof a)throw new TypeError("Function.prototype.bind - argument #1 must be a function.");return function(){return a.apply(b,arguments)}},a.JOII.Compat.GenerateUUID=function(){for(var a=[],b="0123456789abcdef",c=0;c<36;c++)a[c]=b.substr(Math.floor(16*Math.random()),1);a[14]="4",a[19]=b.substr(3&a[19]|8,1),a[8]=a[13]=a[18]=a[23]="-";var d=a.join("");return d},a.JOII.Compat.ParseArguments=function(b){var c={name:"",parameters:{},body:{}};switch(b.length){case 0:c.name=a.JOII.Compat.GenerateUUID();break;case 1:"string"==typeof b[0]&&(c.name=b[0]),"object"==typeof b[0]&&(c.name=a.JOII.Compat.GenerateUUID(),c.body=b[0]);break;case 2:"string"==typeof b[0]&&(c.name=b[0]),"object"==typeof b[0]&&(c.name=a.JOII.Compat.GenerateUUID(),c.parameters=b[0]),c.body=b[1];break;case 3:c.name=b[0],c.parameters=b[1],c.body=b[2]}if("string"!=typeof c.name||"object"!=typeof c.parameters||"object"!=typeof c.body)throw"Invalid parameter types given. Expected: ([[[string], object], <object>]).";return c},a.JOII.Compat.flexibleArgumentToArray=function(b,c){if("object"!=typeof b||a.JOII.Compat.isArray(b)||"undefined"!=typeof b[0]){if("function"==typeof b)return[c?a.JOII.Compat.extend(!0,{},b.prototype):b.prototype];if("object"==typeof b&&a.JOII.Compat.isArray(b)){var d=[];for(var e in b)d.push(a.JOII.Compat.flexibleArgumentToArray(b[e])[0]);return d}throw"Unable to read "+typeof b+". Object, function or array expected."}return[c?a.JOII.Compat.extend(!0,{},b):b]}}("undefined"!=typeof global?global:window,void 0),function(a,b){a.JOII="undefined"!=typeof a.JOII?a.JOII:{},a.JOII.InternalPropertyNames=["__joii__","super","instanceOf","deserialize","serialize"],a.JOII.InternalTypeNames=["undefined","object","boolean","number","string","symbol","function","const"],a.JOII.PrototypeBuilder=function(c,d,e,f){var g={},h=a.JOII.Compat.extend(!0,{},e);if(a.JOII.CreateProperty(g,"__joii__",{name:c,parent:b,metadata:{},constants:{},implementations:[c],is_abstract:d.abstract===!0,is_final:d.final===!0}),"undefined"!=typeof d.uses){var i=a.JOII.Compat.flexibleArgumentToArray(d.uses);for(var j in i)h=a.JOII.Compat.extend(!0,h,i[j])}if(g.__joii__.is_abstract&&g.__joii__.is_final)throw"A class cannot be both abstract and final simultaniously.";for(var k in h){var l=a.JOII.ParseClassProperty(k);l.is_constant?(g.__joii__.constants[l.name]=h[k],a.JOII.CreateProperty(g,l.name,h[k],!1)):g[l.name]=h[k],g.__joii__.metadata[l.name]=l}if("undefined"!=typeof d.abstract&&(g.__joii__.is_abstract=!0,f))throw"An interface cannot be declared abstract.";if("undefined"!=typeof d.extends){var m=d.extends;if("function"==typeof m&&(m=m.prototype),"object"!=typeof m)throw(f?"An interface":"A class")+" may only extend on functions or object-types.";if(g.__joii__.parent=a.JOII.Compat.extend(!0,{},m),m.__joii__.is_final===!0)throw"Unable to extend on a final class.";for(var n=g.__joii__.parent;"undefined"!=typeof n;)g.__joii__.implementations.push(n.__joii__.name),n=n.__joii__.parent;g.__joii__.constants=a.JOII.Compat.extend(!0,g.__joii__.constants,m.__joii__.constants),a.JOII.CreateProperty(g.__joii__.parent,"__joii__",m.__joii__);for(k in g.__joii__.parent)if(g.__joii__.parent.hasOwnProperty(k)&&a.JOII.Compat.indexOf(a.JOII.InternalPropertyNames,k)===-1){var o=g.__joii__.parent[k],p=g.__joii__.parent.__joii__.metadata[k],q=g.__joii__.metadata[k];if("undefined"==typeof q&&(q=g.__joii__.metadata[k]=p),"undefined"==typeof g[k]||"object"!=typeof p||"object"!=typeof q)if("function"==typeof o&&f!==!0)g[k]=Function('                    var args = ["'+k+"\"];                    for (var i in arguments) { args.push(arguments[i]); }                    return this['super'].apply(this, args);                ");else{g[k]=o;var r=a.JOII.CreatePropertyGetterSetter(g,p);"undefined"==typeof g[r.getter.name]&&"undefined"!=typeof r.getter.meta&&(r.getter.meta.is_generated=!0,g[r.getter.name]=r.getter.fn,g.__joii__.metadata[r.getter.name]=r.getter.meta),"undefined"==typeof g[r.setter.name]&&"undefined"!=typeof r.setter.meta&&(r.setter.meta.is_generated=!0,g[r.setter.name]=r.setter.fn,g.__joii__.metadata[r.setter.name]=r.setter.meta)}else if(q.is_generated===!1){if(p.visibility!==q.visibility)throw'Member "'+k+'" must be '+p.visibility+" as defined in the parent "+(f?"interface":"class")+".";if(p.is_final===!0)throw'Final member "'+k+'" cannot be overwritten.';if(p.is_read_only!==q.is_read_only)throw'Member "'+k+'" must be read-only as defined in the parent '+(f?"interface":"class")+".";if(p.is_nullable!==q.is_nullable)throw'Member "'+k+'" must be nullable as defined in the parent '+(f?"interface":"class")+"."}}}for(var k in h){var l=a.JOII.ParseClassProperty(k);if("function"!=typeof g[l.name]&&"private"!==l.visibility){var r=a.JOII.CreatePropertyGetterSetter(h,l);g[r.getter.name]=r.getter.fn,g.__joii__.metadata[r.getter.name]=r.getter.meta,g[r.setter.name]=r.setter.fn,g.__joii__.metadata[r.setter.name]=r.setter.meta}}return f!==!0&&(g.super=function(a){var b=Array.prototype.slice.call(arguments,1),c=this,d=this.__joii__,e=function(a,b,f){if("undefined"==typeof a)throw new Error('Parent method "'+b+'" does not exist.');if("undefined"!=typeof a.__joii__.parent&&"undefined"==typeof a.__joii__.parent[b])return e(a.__joii__.parent,b,f);var g=a.__joii__.parent;if("undefined"==typeof a.__joii__.parent){if("undefined"==typeof a.__api__.__joii__.parent)throw new Error('Method "'+b+"\" does not exist in the parent class. (called using 'super()')");g=a.__api__.__joii__.parent}var h=g[b];c.__joii__=g.__joii__;var i=h.apply(c,f);return c.__joii__=d,i};return e(this,a,b)},g.instanceOf=function(b){"function"==typeof b?b=b.prototype.__joii__.name:"object"==typeof b&&(b=b.__joii__.name);var c=this.__joii__.getInterfaces();for(var d in c){if(c.hasOwnProperty(d)&&c[d].prototype.__joii__.name===b)return!0;if(JOII.Compat.indexOf(c[d].prototype.__joii__.implementations,b)!==-1)return!0}if(this.__joii__.name!==b){if("undefined"!=typeof this.__joii__.parent){var e=this,f=this.__joii__.parent;a.JOII.Compat.Bind(f.instanceOf,f);var g=f.instanceOf(b);return a.JOII.Compat.Bind(f.instanceOf,e),g}return!1}return!0}),g},a.JOII.ParseClassProperty=function(b){var c,d=b.toString().replace(/^\s+|\s+(?=\s)|\s+$/g,"").split(/\s/),e=d[d.length-1],f=a.JOII.InternalTypeNames,g=!1,h={name:e,type:null,visibility:"public",is_abstract:!1,is_final:!1,is_nullable:!1,is_read_only:!1,is_constant:!1,is_enum:!1,is_generated:!1,is_joii_object:!1,serializable:!1};if(d.pop(),0===d.length)return h;for(c in d)"undefined"==typeof a.JOII.InterfaceRegistry[d[c]]&&"undefined"==typeof a.JOII.ClassRegistry[d[c]]&&(d[c]=d[c].toString().toLowerCase());var i=function(b,c,d){"object"!=typeof b&&(b=[b]);for(var e in b)if(a.JOII.Compat.indexOf(c,b[e])!==-1)throw d};for(c in d)switch(d[c]){case"public":i("protected",d,'Property "'+e+'" cannot be both public and protected at the same time.'),i("private",d,'Property "'+e+'" cannot be both public and private at the same time.'),h.visibility="public",g||(h.serializable=!0);break;case"protected":i("public",d,'Property "'+e+'" cannot be both protected and public at the same time.'),i("private",d,'Property "'+e+'" cannot be both protected and private at the same time.'),h.visibility="protected";break;case"private":i("public",d,'Property "'+e+'" cannot be both private and public at the same time.'),i("protected",d,'Property "'+e+'" cannot be both private and protected at the same time.'),h.visibility="private";break;case"abstract":i("final",d,'Property "'+e+'" cannot be both abstract and final at the same time.'),h.is_abstract=!0;break;case"final":i("abstract",d,'Property "'+e+'" cannot be both abstract and final at the same time.'),h.is_final=!0;break;case"nullable":h.is_nullable=!0;break;case"read":case"immutable":h.is_read_only=!0;break;case"serializable":h.serializable=!0,g=!0;break;case"notserializable":h.serializable=!1,g=!0;break;case"const":i(["private","protected","public"],d,"A constant cannot have visibility modifiers."),i("final",d,"A constant cannot be final."),i("abstract",d,"A constant cannot be abstract."),i(["nullable","immutable","read"],d,"A constant cannot be nullable or immutable."),h.is_constant=!0;break;default:if(a.JOII.Compat.indexOf(f,d[c])!==-1){if(null!==h.type)throw'Property "'+e+'" has multiple type defintions.';h.type=d[c];break}if("undefined"!=typeof a.JOII.InterfaceRegistry[d[c]]){h.is_joii_object=!0,h.type=a.JOII.InterfaceRegistry[d[c]].definition.__interface__.name;break}if("undefined"!=typeof a.JOII.ClassRegistry[d[c]]){h.is_joii_object=!0,h.type=a.JOII.ClassRegistry[d[c]].prototype.__joii__.name;break}if("undefined"!=typeof a.JOII.EnumRegistry[d[c]]){h.is_enum=!0,h.type=d[c];break}throw'Syntax error: unexpected "'+d[c]+'" in property declaration of "'+e+'".'}return h},a.JOII.CreatePropertyGetterSetter=function(b,c){var d,e,f;"boolean"===c.type?"Is"===a.JOII.CamelcaseName(c.name).substr(0,2)?(d=a.JOII.CamelcaseName(c.name),d=d.substring(0,1).toLowerCase()+d.substring(1)):d="is"+a.JOII.CamelcaseName(c.name):d="get"+a.JOII.CamelcaseName(c.name);var g,h,i="set"+a.JOII.CamelcaseName(c.name);if("undefined"==typeof b[d]&&(f=new Function('return this["'+c.name+'"];'),e=a.JOII.ParseClassProperty(c.visibility+" function "+d),e.visibility=c.visibility,e.is_abstract=c.is_abstract,e.is_final=c.is_final),"undefined"==typeof b[i]&&c.is_read_only===!1){var j,k=c.is_nullable;j="undefined"!=typeof a.JOII.InterfaceRegistry[c.type]||"undefined"!=typeof a.JOII.ClassRegistry[c.type]?"                            if (JOII.Compat.findJOIIName(v) === '"+c.type+"') {} else {\n                            if (v !== null && typeof(v.instanceOf) !== 'function' || (typeof(v) === 'object' && v !== null && typeof(v.instanceOf) === 'function' && !v.instanceOf('"+c.type+"')) || v === null) {\n                                if ("+k+" === false || ("+k+' === true && v !== null && typeof(v) !== "undefined")) {\n                                    throw "'+i+" expects an instance of "+c.type+', " + (v === null ? "null" : typeof(v)) + " given.";\n                                }\n                            }};':"                            if (typeof(JOII.EnumRegistry['"+c.type+"']) !== 'undefined') {                                var _e = JOII.EnumRegistry['"+c.type+"'];                                if (!_e.contains(v)) {                                    throw \""+i+': \'" + v + "\' is not a member of enum " + _e.getName() + ".";                                }                            } else {                                if (typeof(v) !== \''+c.type+"') {                                    if ("+k+" === false || ("+k+' === true && v !== null && typeof(v) !== "undefined")) {                                        throw "'+i+" expects "+c.type+', " + typeof(v) + " given.";                                    }                                };                            }',h=new Function("v",(null!==c.type?j:"")+'this["'+c.name+'"] = v; return this.__api__;'),g=a.JOII.ParseClassProperty(c.visibility+" function "+i),g.visibility=c.visibility,g.is_abstract=c.is_abstract,g.is_final=c.is_final}return{getter:{name:d,fn:f,meta:e},setter:{name:i,fn:h,meta:g}}},a.JOII.CreateProperty=function(a,b,c,d){try{if("undefined"!=typeof Object.defineProperty)return void Object.defineProperty(a,b,{value:c,enumerable:d===!1,configurable:d!==!1,writable:d!==!1});a[b]=c}catch(d){a[b]=c}},a.JOII.CamelcaseName=function(a){return a=a.toLowerCase().replace(/_(.)/g,function(a,b){return b.toUpperCase()}),a.charAt(0).toUpperCase()+a.slice(1)}}("undefined"!=typeof global?global:window,void 0),function(a,b){a.JOII="undefined"!=typeof a.JOII?a.JOII:{},a.JOII.ClassRegistry={},a.JOII.ClassBuilder=function(){function b(){var b=function(){};b.prototype=this;var c=new b,d={};if(c=a.JOII.Compat.extend(!0,{},c),"undefined"!=typeof this&&(a.JOII.CreateProperty(c,"__joii__",this.__joii__),a.JOII.CreateProperty(d,"__joii__",this.__joii__)),"undefined"!=typeof this&&"object"==typeof this.__joii__){if(this.__joii__.is_abstract===!0)throw"An abstract class cannot be instantiated.";for(var e in this){var g=this.__joii__.metadata[e];if(g&&g.is_abstract===!0)throw'Missing abstract member implementation of "'+e+'".';"function"!=typeof this[e]||"undefined"!=typeof g&&"public"!==g.visibility||"__call"===e||(d[e]=a.JOII.Compat.Bind(c[e],c))}}if("undefined"==typeof this||"undefined"==typeof this.__joii__){for(var h in a.JOII.Config.callables)if(a.JOII.Config.callables.hasOwnProperty(h)&&"function"==typeof f[a.JOII.Config.callables[h]]){var i=f[a.JOII.Config.callables[h]].apply(f,arguments);if(i===f)throw a.JOII.Config.callables[h]+" cannot return itself.";return i}throw"This class cannot be called as a function because it's lacking the __call method."}if(c.__api__=d,"undefined"!=typeof c.__joii__.parent)for(var j=c.__joii__.parent;"undefined"!=typeof j;)j.__api__=d,j=j.__joii__.parent;for(var h in a.JOII.Config.constructors)if(a.JOII.Config.constructors.hasOwnProperty(h)){var k=a.JOII.Config.constructors[h];if("function"==typeof c[k]){c[k].apply(c,arguments);break}}if(1==arguments.length&&"object"==typeof arguments[0]&&"__joii_deserialize_object"in arguments[0]&&c.deserialize(arguments[0].data),this.__joii__.is_abstract)throw"Cannot instantiate abstract class "+this.__joii__.name;return d}var c=a.JOII.Compat.ParseArguments(arguments),d=c.name,e=c.parameters,f=c.body;b.prototype=a.JOII.PrototypeBuilder(d,e,f,!1);for(var g in b.prototype.__joii__.constants)a.JOII.CreateProperty(b,g,b.prototype.__joii__.constants[g],!1);if("string"==typeof e.enum){var h=a.JOII.EnumBuilder(e.enum,b);if(e.expose_enum===!0){if("undefined"!=typeof a[e.enum])throw'Cannot expose Enum "'+e.enum+'" becase it already exists in the global scope.';a[e.enum]=h}}var i=arguments[0];if(b.toString=function(){return"string"==typeof i?"[class "+i+"]":"[class Class]"},b.prototype.__joii__.interfaces=e.implements,b.prototype.__joii__.getInterfaces=a.JOII.Compat.Bind(function(){var b=[],c=a.JOII.Compat.Bind(function(b){if("function"==typeof b)return b;if("string"==typeof b){if("undefined"==typeof a.JOII.InterfaceRegistry[b])throw'Interface "'+b+'" does not exist.';return a.JOII.InterfaceRegistry[b]}},this);if("undefined"!=typeof this.parent&&"undefined"!=typeof this.parent.__joii__&&(b=this.parent.__joii__.getInterfaces()),"undefined"!=typeof this.interfaces)if("object"==typeof this.interfaces)for(var d in this.interfaces)this.interfaces.hasOwnProperty(d)&&b.push(c(this.interfaces[d]));else b.push(c(this.interfaces));return b},b.prototype.__joii__),e.abstract!==!0){var j=b.prototype.__joii__.getInterfaces();for(var k in j)j.hasOwnProperty(k)&&"function"==typeof j[k]&&j[k](b)}if("undefined"==typeof b.prototype.serialize&&(b.prototype.serialize=function(){var a={__joii_type:this.__joii__.name};for(var b in this.__joii__.metadata){var c=this.__joii__.metadata[b];c.serializable&&(c.is_joii_object&&!c.is_enum&&"object"==typeof this[c.name]&&null!=this[c.name]?a[c.name]=JSON.parse(this[c.name].serialize()):a[c.name]=this[c.name])}return JSON.stringify(a)}),"undefined"==typeof b.prototype.deserialize&&(b.prototype.deserialize=function(b){var c=b;"string"==typeof b&&(c=JSON.parse(b));for(var d in this.__joii__.metadata){var e=this.__joii__.metadata[d];if(e.serializable&&e.name in c&&"function"!=typeof c[e.name])if("object"==typeof c[e.name]&&null!=c[e.name]&&"__joii_type"in c[e.name]){var f=c[e.name].__joii_type;if("undefined"!=typeof a.JOII.InterfaceRegistry[f])throw"Cannot instantiate an interface.";if("undefined"==typeof a.JOII.ClassRegistry[f])throw"Class "+f+" not currently in scope!";this[e.name]=a.JOII.ClassRegistry[f].deserialize(c[e.name])}else this[e.name]=c[e.name]}}),b.deserialize=function(a){var c={__joii_deserialize_object:!0,data:a};return new b(c)},"undefined"!=typeof a.JOII.ClassRegistry[d])throw'Another class named "'+d+'" already exists.';return a.JOII.ClassRegistry[d]=b,b.prototype=a.JOII.Compat.extend(!0,{},b.prototype),b}}("undefined"!=typeof global?global:window,void 0),function(a,b){a.JOII="undefined"!=typeof a.JOII?a.JOII:{},a.JOII.InterfaceRegistry={},a.JOII.InterfaceBuilder=function(){var b=a.JOII.Compat.ParseArguments(arguments),c=b.name,d=b.parameters,e=b.body,f=a.JOII.PrototypeBuilder(c,d,e,!0),g=function(b){var c,d,e,f=new a.JOII.Reflection.Class(b),g=this.reflector.getProperties(),h=this.reflector.getMethods();if(f.isAbstract())return!0;var i=function(a,b,c,d){if(b.getVisibility()!==c.getVisibility())throw d+" "+c.getName()+" cannot be "+c.getVisibility()+" because the interface declared it "+b.getVisibility()+".";if(b.getType()!==c.getType())throw d+" "+c.getName()+" cannot be declared as "+c.getType()+" because the interface declared it as "+b.getType()+".";if(b.isNullable()!==c.isNullable())throw d+" "+c.getName()+" must be nullable as defined in the interface "+a.name+".";return!0};for(c in g){if(d=g[c],!f.hasProperty(d.getName()))throw"Class must implement "+d.toString().split(":")[0]+" as defined in the interface "+this.name+".";e=f.getProperty(d.getName()),i(this,d,e,"Property")}for(c in h){if(d=h[c],!f.hasMethod(d.getName()))throw"Class must implement "+d.toString().split(":")[0]+" as defined in the interface "+this.name+".";if(e=f.getMethod(d.getName()),i(this,d,e,"Method"),d.getParameters().length!==e.getParameters().length)throw"Method "+d.getName()+" does not match the parameter count as defined in the interface "+this.name+"."}};a.JOII.CreateProperty(g,"__interface__",{prototype:f,reflector:new a.JOII.Reflection.Class(f),name:c}),a.JOII.CreateProperty(g,"__joii__",f.__joii__);var h=a.JOII.Compat.Bind(g,g.__interface__);h.prototype=f;var i,j=g.__interface__.reflector.getProperties(),k=g.__interface__.reflector.getMethods(),l=function(a,b){if(a.isAbstract())throw"An interface may not contain abstract definitions. "+b+" "+a.getName()+" is abstract in interface "+g.__interface__.name+".";if(a.isFinal())throw"An interface may not contain final definitions. "+b+" "+a.getName()+" is final in interface "+g.__interface__.name+"."};for(i in j)l(j[i],"Property");for(i in k)l(k[i],"Method");if(a.JOII.CreateProperty(h,"definition",g),"undefined"!=typeof a.JOII.InterfaceRegistry[c])throw'Another interface with the name "'+c+'" already exists.';if(a.JOII.Compat.indexOf(a.JOII.InternalTypeNames,c)!==-1)throw'An interface may not be named "'+c+'", becase that name is reserved.';var m={};for(i in f.__joii__.constants)a.JOII.CreateProperty(h,i,f.__joii__.constants[i],!1),m[i]=f.__joii__.constants[i];if("string"==typeof d.enum){var n=a.JOII.EnumBuilder(d.enum,m);if(d.expose_enum===!0){if("undefined"!=typeof a[d.enum])throw'Cannot expose Enum "'+d.enum+'" becase it already exists in the global scope.';a[d.enum]=n}}return a.JOII.InterfaceRegistry[c]=h,h}}("undefined"!=typeof global?global:window,void 0),function(a,b){a.JOII.EnumRegistry={},a.JOII.EnumBuilder=a.JOII.ClassBuilder({final:!0},{"public immutable string name":null,"public immutable object constants":{},__construct:function(a,b){this.name=a,this.constants=b},contains:function(a){for(var b in this.constants)if(this.constants[b]===a)return!0;return!1},__call:function(b,c){if("string"!=typeof b)throw"Argument #1 of Enum must be a string, "+typeof b+" given.";if("function"==typeof c&&"undefined"!=typeof c.prototype.__joii__&&(c=c.prototype.__joii__.constants),"object"!=typeof c)throw"Argument #2 of Enum must be an object or definition, "+typeof c+" given.";if("undefined"!=typeof a.JOII.EnumRegistry[b.toLowerCase()])throw'Enumerator "'+b+'" already exists.';var d=new a.JOII.EnumBuilder(b,c);for(var e in c){if("function"==typeof c[e])throw'An enumerator cannot contain functions. "'+e+'" is a function.';if("object"==typeof c[e])throw'An enumerator cannot contain objects. "'+e+'" is an object.';a.JOII.CreateProperty(d,e,c[e],!1)}return a.JOII.EnumRegistry[b.toLowerCase()]=d,d}})}("undefined"!=typeof global?global:window,void 0),function(a,b){a.JOII="undefined"!=typeof a.JOII?a.JOII:{},a.JOII.Reflection={},a.JOII.Reflection.Class=a.JOII.ClassBuilder({},{"protected immutable object meta":null,"protected immutable object proto":null,"public immutable object parent":null,"protected __construct":function(b){if("function"==typeof b&&(b=b.prototype),"object"!=typeof b||"object"!=typeof b.__joii__)throw"Reflection.Class requires a JOII-created definition.";this.proto=b,this.meta=b.__joii__,"undefined"!=typeof this.meta.parent&&(this.parent=new a.JOII.Reflection.Class(this.meta.parent))},"public getName":function(){return this.meta.name},"public isAbstract":function(){return this.meta.is_abstract===!0},"public hasProperty":function(a){var b=this.getProperties();for(var c in b)if(b[c].getName()===a)return!0;return!1},"public hasParent":function(){return null!==this.parent},"public getParent":function(){return this.parent},"public getMethods":function(b){var c=[];for(var d in this.proto)"function"==typeof this.proto[d]&&a.JOII.Compat.indexOf(a.JOII.InternalPropertyNames,d)===-1&&c.push(new a.JOII.Reflection.Method(this,d));return c},"public hasMethod":function(a){var b=this.getMethods();for(var c in b)if(b[c].getName()===a)return!0;return!1},"public getMethod":function(a){var b=this.getMethods();for(var c in b)if(b[c].getName()===a)return b[c];throw'Method "'+a+'" does not exist.'},"public getProperties":function(b){var c=[];for(var d in this.proto)"function"!=typeof this.proto[d]&&a.JOII.Compat.indexOf(a.JOII.InternalPropertyNames,d)===-1&&c.push(new a.JOII.Reflection.Property(this,d));return c},"public getProperty":function(a){var b=this.getProperties();for(var c in b)if(b[c].getName()===a)return b[c];throw'Property "'+a+'" does not exist.'}}),a.JOII.Reflection.Property=a.JOII.ClassBuilder({},{"protected nullable object reflector":null,"protected nullable object meta":null,"public read string name":null,"protected __construct":function(a,b){this.reflector=a,this.name=b,this.meta=a.getMeta().metadata[b],"undefined"==typeof this.meta&&(this.meta={name:this.name,type:null,visibility:"public",is_nullable:!1,is_abstract:!1,is_read_only:!1,is_final:!1}),null===this.meta.type&&this.meta.is_nullable===!1&&(this.meta.type=typeof this.reflector.getProto()[this.meta.name])},"public getType":function(){return this.meta.type},"public isAbstract":function(){return this.meta.is_abstract},"public isNullable":function(){return this.meta.is_nullable},"public isFinal":function(){return this.meta.is_final},"public isPrivate":function(){return"private"===this.meta.visibility},"public isProtected":function(){return"protected"===this.meta.visibility},"public isPublic":function(){return"public"===this.meta.visibility},"public isImmutable":function(){return this.meta.is_read_only},"public isConstant":function(){return this.meta.is_constant},"public isType":function(a){return a===this.meta.type},"public getVisibility":function(){return this.meta.visibility},toString:function(){var a=[],b=this.reflector.getProto()[this.name],c="",d="";return this.meta.is_abstract&&a.push("abstract"),this.meta.is_final&&a.push("final"),a.push(this.meta.visibility),this.meta.is_nullable&&a.push("nullable"),this.meta.is_read_only&&a.push("read"),null===this.meta.type?null===b?a.push("mixed"):a.push(typeof b):a.push(this.meta.type),a.push('"'+this.meta.name+'"'),c=a.join(" "),d="function"==typeof b?"[Function]":"object"==typeof b&&null!==b?"[Object ("+b.length+")]":"string"==typeof b?'"'+b+'"':b,c+": "+d}}),a.JOII.Reflection.Method=a.JOII.ClassBuilder({extends:a.JOII.Reflection.Property},{"public getParameters":function(){var a=/^function\s*[^\(]*\(\s*([^\)]*)\)/m,b=/,/,c=/^\s*(_?)(\S+?)\1\s*$/,d=/((\/\/.*$)|(\/\*[\s\S]*?\*\/))/gm,e=function(e){var f,g,h=[];f=e.toString().replace(d,""),g=f.match(a);var i=g[1].split(b),j=function(a,b,c){h.push(c)};for(var k in i){var l=i[k];l.replace(c,j)}return h};return e(this.reflector.getProto()[this.name])},"public getBodyAsString":function(a){var b=/((\/\/.*$)|(\/\*[\s\S]*?\*\/))/gm,c=this.reflector.getProto()[this.name].toString().replace(b,"");return c.substr(c.indexOf("{")+1,c.lastIndexOf("}")-4).replace(/}([^}]*)$/,"$1")},"public usesVariadicArguments":function(){var a=this.reflector.getProto()[this.name].toString();return a.match(/[\(|\.|\ ](arguments)[\)|\.|\,|\ |]/g)},toString:function(){var a=this.super("toString").split(":")[0],b="[Function",c=this.getParameters(),d=this.usesVariadicArguments();return c.length>0?(b+=" ("+c.join(", "),d&&(b+=", ..."),b+=")"):0===c.length&&d&&(b+=" (...)"),b+="]",a+": "+b}})}("undefined"!=typeof global?global:window,void 0),function(a,b){a.JOII.Config={constructors:["__construct","construct","->","=>"],callables:["__call","<>"],addConstructor:function(b){a.JOII.Config.constructors.indexOf(b)===-1&&a.JOII.Config.constructors.push(b)},addCallable:function(b){a.JOII.Config.callables.indexOf(b)===-1&&a.JOII.Config.callables.push(b)}}}("undefined"!=typeof window?window:global),function(a,b){a.JOII.isInstance=function(a){return"object"==typeof a&&"object"==typeof a.__joii__&&"function"==typeof a.instanceOf},a.JOII.Publish=a.JOII.Compat.Bind(function(b){return b=this.parseNamespace(b,a),b.Class=a.JOII.ClassBuilder,b.Interface=a.JOII.InterfaceBuilder,b.Enum=a.JOII.EnumBuilder,b},{parseNamespace:function(a,b){var c,d,e,f,g=[];if("undefined"==typeof a)return b;if("object"==typeof a||"function"==typeof a)return a;if("string"==typeof a){for(f=a.split("."),c=0,d=f.length,e=b;c<d;++c)if(g.push(f[c]),"undefined"==typeof e[f[c]])e[f[c]]={},e=e[f[c]];else{if("object"!=typeof e[f[c]]&&"function"!=typeof e[f[c]])throw"Unable to create namespace: "+g.join(".")+" already exists as "+typeof e[f[c]]+".";e=e[f[c]]}return e}throw"parseNamespace expects undefined, object or string. "+typeof a+" given."}})()}("undefined"!=typeof global?global:window,void 0);