// Generated from 'submit-config.h.in' on Tue Sep 14 09:18:13 CEST 2021.

#ifndef _SUBMIT_CONFIG_
#define _SUBMIT_CONFIG_

/* Team HOME subdirectory to use for storing temporary/log/etc. files
   and permissions. */
#define USERDIR      ".domjudge"
#define USERPERMDIR  0700
#define USERPERMFILE 0600

/* Last modified time in minutes after which to warn for submitting
   an old file. */
#define WARN_MTIME   5

/* Base URL of the DOMjudge web interfaces, used to access the REST API. */
#define BASEURL      "http://localhost/"

#endif /* _SUBMIT_CONFIG_ */
