<?php
//============================================================+
// File name   : tce_db_config.php
// Begin       : 2001-09-02
// Last Update : 2009-11-10
//
// Description : Database congiguration file.
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com S.r.l.
//               Via della Pace, 11
//               09044 Quartucciu (CA)
//               ITALY
//               www.tecnick.com
//               info@tecnick.com
//
// License:
//    Copyright (C) 2004-2009  Nicola Asuni - Tecnick.com S.r.l.
//
//    This program is free software: you can redistribute it and/or modify
//    it under the terms of the GNU Affero General Public License as
//    published by the Free Software Foundation, either version 3 of the
//    License, or (at your option) any later version.
//
//    This program is distributed in the hope that it will be useful,
//    but WITHOUT ANY WARRANTY; without even the implied warranty of
//    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//    GNU Affero General Public License for more details.
//
//    You should have received a copy of the GNU Affero General Public License
//    along with this program.  If not, see <http://www.gnu.org/licenses/>.
//
//    Additionally, you can't remove, move or hide the original TCExam logo,
//    copyrights statements and links to Tecnick.com and TCExam websites.
//
//    See LICENSE.TXT file for more information.
//============================================================+

/**
 * Database congiguration file.
 * @package com.tecnick.tcexam.shared.cfg
 * @author Nicola Asuni
 * @copyright Copyright © 2004-2009, Nicola Asuni - Tecnick.com S.r.l. - ITALY - www.tecnick.com - info@tecnick.com
 * @license http://www.fsf.org/licensing/licenses/agpl-3.0.html GNU Affero General Public License
 * @link www.tecnick.com
 * @since 2001-09-02
 */

/**
 * database type (MYSQL, POSTGRESQL, ORACLE)
 */
define ('K_DATABASE_TYPE', '');

/**
 * database Host name (eg: localhost)
 */
define ('K_DATABASE_HOST', '');

/**
 * database port (eg: 3306, 5432, 1521)
 */
define ('K_DATABASE_PORT', '');

/**
 * database name (TCExam)
 */
define ('K_DATABASE_NAME', '');

/**
 * database user name
 */
define ('K_DATABASE_USER_NAME', '');

/**
 * database user password
 */
define ('K_DATABASE_USER_PASSWORD', '');

/**
 * prefix for database tables names
 */
define ('K_TABLE_PREFIX', 'tce_');

// -----------------------------------------------------------------------------
// --- DATABASE TABLES NAMES (DO NOT CHANGE) -----------------------------------
// -----------------------------------------------------------------------------

/**
 * This table stores information about users' Web sessions.
 */
define ('K_TABLE_SESSIONS', K_TABLE_PREFIX.'sessions');

/**
 * This table contains all registered users' data, including system administrators and a special 'anonymous' user.
 */
define ('K_TABLE_USERS', K_TABLE_PREFIX.'users');

/**
 * Table for modules. A module is a container for subjects.
 */
define ('K_TABLE_MODULES', K_TABLE_PREFIX.'modules');

/**
 * This table contains all tests subjects (topics, branch of studies).
 */
define ('K_TABLE_SUBJECTS', K_TABLE_PREFIX.'subjects');

/**
 * This table contains all questions relative to specific subjects.
 */
define ('K_TABLE_QUESTIONS', K_TABLE_PREFIX.'questions');

/**
 * This table contains all answers relative to a specific questions.
 */
define ('K_TABLE_ANSWERS', K_TABLE_PREFIX.'answers');

/**
 * This table contains all tests data.
 */
define ('K_TABLE_TESTS', K_TABLE_PREFIX.'tests');

/**
 * This table contains the list of tests generated for each user.
 */
define ('K_TABLE_TEST_USER', K_TABLE_PREFIX.'tests_users');

/**
 * This table lists the type and quantity of the questions associated to each set of subjects selected for a particular test.
 */
define ('K_TABLE_TEST_SUBJSET', K_TABLE_PREFIX.'test_subject_set');

/**
 * This table contains all tests subjects (topics, branch of studies).
 */
define ('K_TABLE_SUBJECT_SET', K_TABLE_PREFIX.'test_subjects');

/**
 * This table contains all questions and user answers relative to a specific test for a specific user.
 */
define ('K_TABLE_TESTS_LOGS', K_TABLE_PREFIX.'tests_logs');

/**
 * This table contains the list of the selected alternative answers for each multiple-choice question.
 */
define ('K_TABLE_LOG_ANSWER', K_TABLE_PREFIX.'tests_logs_answers');

/**
 * This table contains users' groups. Each user belongs to one of the groups defined in this table.
 */
define ('K_TABLE_GROUPS', K_TABLE_PREFIX.'user_groups');

/**
 * This table contains the list of groups to whom each user belongs.
 */
define ('K_TABLE_USERGROUP', K_TABLE_PREFIX.'usrgroups');

/**
 * This table contains the list of groups enabled for a selected test.
 */
define ('K_TABLE_TEST_GROUPS', K_TABLE_PREFIX.'testgroups');

//============================================================+
// END OF FILE
//============================================================+
