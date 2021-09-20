# Variables (mostly paths) set by configure.
# This file is globally included via Makefile.global.

# General package variables
PACKAGE = domjudge
VERSION = 7.3.3
DISTNAME = $(PACKAGE)-$(VERSION)

# The following line is automatically modified by snapshot/release
# scripts, do not change manually!
PUBLISHED = release

PACKAGE_NAME      = DOMjudge
PACKAGE_VERSION   = 7.3.3
PACKAGE_STRING    = DOMjudge 7.3.3
PACKAGE_TARNAME   = domjudge
PACKAGE_BUGREPORT = domjudge-devel@domjudge.org

# Compilers and FLAGS
CC  = gcc
CXX = g++
CPP = gcc -E

CFLAGS   = -g -O1 -Wall -fstack-protector -D_FORTIFY_SOURCE=2 -fPIE -Wformat -Wformat-security -pedantic -std=c11
CXXFLAGS = -g -O1 -Wall -fstack-protector -D_FORTIFY_SOURCE=2 -fPIE -Wformat -Wformat-security -pedantic -std=c++11
CPPFLAGS = 
LDFLAGS  = -fPIE -pie -Wl,-z,relro -Wl,-z,now 

STATIC_LINK_START = 
STATIC_LINK_END   = 

EXEEXT = 
OBJEXT = .o

# Other programs
LN_S    = ln -s
MKDIR_P = /usr/bin/mkdir -p
INSTALL = /usr/bin/install -c


# Build submit client?
SUBMITCLIENT_ENABLED = yes

# Build documentation?
DOC_BUILD_ENABLED = yes

# libcgroup
LIBCGROUP = -lcgroup

# libmagic
LIBMAGIC = -lmagic

# libJSONcpp
LIBJSONCPP = -ljsoncpp

# libcURL
CURL_CFLAGS = 
CURL_LIBS   = -lcurl
CURL_STATIC = 

# User:group file ownership of password files
DOMJUDGE_USER   = domjudge
WEBSERVER_GROUP = domjudge

# Base URL of the DOMjudge web interfaces
BASEURL         = http://localhost/

# Autoconf prefixes and paths
FHS_ENABLED    = no

prefix         = /domjudge
exec_prefix    = ${prefix}

bindir         = ${exec_prefix}/bin
sbindir        = ${exec_prefix}/sbin
libexecdir     = ${exec_prefix}/libexec
sysconfdir     = ${prefix}/etc
sharedstatedir = ${prefix}/com
localstatedir  = ${prefix}/var
libdir         = ${exec_prefix}/lib
includedir     = ${prefix}/include
oldincludedir  = /usr/include
datarootdir    = ${prefix}/share
datadir        = ${datarootdir}
infodir        = ${datarootdir}/info
localedir      = ${datarootdir}/locale
mandir         = ${datarootdir}/man
docdir         = ${datarootdir}/doc/${PACKAGE_TARNAME}
htmldir        = ${docdir}
dvidir         = ${docdir}
pdfdir         = ${docdir}
psdir          = ${docdir}

# Installation paths
domserver_bindir       = /domjudge/bin
domserver_etcdir       = /domjudge/etc
domserver_webappdir    = /domjudge/webapp
domserver_sqldir       = /domjudge/sql
domserver_libdir       = /domjudge/lib
domserver_libvendordir = /domjudge/lib/vendor
domserver_logdir       = /domjudge/output/log
domserver_rundir       = /domjudge/output/run
domserver_tmpdir       = /domjudge/output/tmp

judgehost_bindir       = /domjudge/bin
judgehost_etcdir       = /domjudge/etc
judgehost_libdir       = /domjudge/lib
judgehost_libjudgedir  = /domjudge/lib/judge
judgehost_logdir       = /domjudge/output/log
judgehost_rundir       = /domjudge/output/run
judgehost_tmpdir       = /domjudge/output/tmp
judgehost_judgedir     = /domjudge/output/judgings
judgehost_chrootdir    = /chroot/domjudge
judgehost_cgroupdir    = /sys/fs/cgroup

domjudge_docdir        = /domjudge/doc

# The tmpdir's are not in these lists, since they would otherwise get
# their permissions overwritten in FHS install mode.
domserver_dirs = $(domserver_bindir) $(domserver_etcdir) \
                 $(domserver_libdir) $(domserver_libvendordir) \
                 $(domserver_logdir) $(domserver_rundir) \
                 $(addprefix $(domserver_webappdir)/public/images/,affiliations countries teams)

judgehost_dirs = $(judgehost_bindir) $(judgehost_etcdir) $(judgehost_libdir) \
                 $(judgehost_libjudgedir) $(judgehost_logdir) \
                 $(judgehost_rundir) $(judgehost_judgedir)

docs_dirs      = $(addprefix $(domjudge_docdir)/,manual examples logos)

# Macro to substitute configure variables.
# Defined in makefile to allow for expansion of ${prefix} etc. during
# build and install, conforming to the GNU coding standards, see:
# http://www.gnu.org/software/hello/manual/autoconf/Installation-Directory-Variables.html
define substconfigvars
@[ -n "$(QUIET)" ] || echo "Substituting configure variables in '$@'."
@cat $< | sed \
	-e "s|@configure_input[@]|Generated from '$<' on `date`.|g" \
	-e 's,@PACKAGE_NAME[@],DOMjudge,g' \
	-e 's,@DOMJUDGE_VERSION[@],7.3.3,g' \
	-e 's,@domserver_bindir[@],/domjudge/bin,g' \
	-e 's,@domserver_etcdir[@],/domjudge/etc,g' \
	-e 's,@domserver_webappdir[@],/domjudge/webapp,g' \
	-e 's,@domserver_sqldir[@],/domjudge/sql,g' \
	-e 's,@domserver_libdir[@],/domjudge/lib,g' \
	-e 's,@domserver_libvendordir[@],/domjudge/lib/vendor,g' \
	-e 's,@domserver_logdir[@],/domjudge/output/log,g' \
	-e 's,@domserver_rundir[@],/domjudge/output/run,g' \
	-e 's,@domserver_tmpdir[@],/domjudge/output/tmp,g' \
	-e 's,@judgehost_bindir[@],/domjudge/bin,g' \
	-e 's,@judgehost_etcdir[@],/domjudge/etc,g' \
	-e 's,@judgehost_libdir[@],/domjudge/lib,g' \
	-e 's,@judgehost_libjudgedir[@],/domjudge/lib/judge,g' \
	-e 's,@judgehost_logdir[@],/domjudge/output/log,g' \
	-e 's,@judgehost_rundir[@],/domjudge/output/run,g' \
	-e 's,@judgehost_tmpdir[@],/domjudge/output/tmp,g' \
	-e 's,@judgehost_judgedir[@],/domjudge/output/judgings,g' \
	-e 's,@judgehost_chrootdir[@],/chroot/domjudge,g' \
	-e 's,@judgehost_cgroupdir[@],/sys/fs/cgroup,g' \
	-e 's,@domjudge_docdir[@],/domjudge/doc,g' \
	-e 's,@DOMJUDGE_USER[@],domjudge,g' \
	-e 's,@WEBSERVER_GROUP[@],domjudge,g' \
	-e 's,@BEEP[@],@BEEP@,g' \
	-e 's,@RUNUSER[@],domjudge-run,g' \
	-e 's,@RUNGROUP[@],domjudge-run,g' \
	-e 's,@BASEURL[@],http://localhost/,g' \
	-e 's,@SUBMITCLIENT_ENABLED[@],yes,g' \
	> $@
@chmod --reference=$< $@
endef
