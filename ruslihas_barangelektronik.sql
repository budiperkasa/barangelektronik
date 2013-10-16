-- phpMyAdmin SQL Dump
-- version 3.4.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 12, 2012 at 06:22 AM
-- Server version: 5.0.92
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ruslihas_barangelektronik`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL auto_increment,
  `type_id` int(11) NOT NULL default '0',
  `parent_category_id` int(11) NOT NULL default '0',
  `tree_path` varchar(255) NOT NULL,
  `order_num` int(11) NOT NULL,
  `name` varchar(255) default NULL,
  `seo_name` varchar(255) NOT NULL default '',
  `selected_icons_serialized` text NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `parent_category_id` (`parent_category_id`),
  KEY `tree_path` (`tree_path`),
  FULLTEXT KEY `name` (`name`,`meta_title`,`meta_description`),
  FULLTEXT KEY `meta_title` (`meta_title`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 PACK_KEYS=0 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `content_fields`
--

CREATE TABLE IF NOT EXISTS `content_fields` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) default NULL,
  `frontend_name` varchar(255) default NULL,
  `seo_name` varchar(255) default NULL,
  `type` varchar(255) default NULL,
  `type_name` varchar(255) NOT NULL,
  `configuration_page` tinyint(1) NOT NULL,
  `search_configuration_page` tinyint(1) NOT NULL,
  `description` text,
  `required` tinyint(1) NOT NULL,
  `v_index_page` tinyint(1) NOT NULL,
  `v_types_page` tinyint(1) NOT NULL,
  `v_categories_page` tinyint(1) NOT NULL,
  `v_search_page` tinyint(1) NOT NULL,
  `v_quicklist_page` tinyint(1) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `seo_name` (`seo_name`),
  KEY `v_index_page` (`v_index_page`),
  KEY `v_types_page` (`v_types_page`),
  KEY `v_categories_page` (`v_categories_page`),
  KEY `v_search_page` (`v_search_page`),
  KEY `v_quicklist_page` (`v_quicklist_page`),
  KEY `frontend_name` (`frontend_name`),
  KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `content_fields`
--

INSERT INTO `content_fields` (`id`, `name`, `frontend_name`, `seo_name`, `type`, `type_name`, `configuration_page`, `search_configuration_page`, `description`, `required`, `v_index_page`, `v_types_page`, `v_categories_page`, `v_search_page`, `v_quicklist_page`) VALUES
(1, 'Information', '', 'information', 'richtext', 'Rich text editor', 1, 1, '', 1, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `content_fields_groups`
--

CREATE TABLE IF NOT EXISTS `content_fields_groups` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `custom_name` varchar(255) NOT NULL,
  `custom_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `custom_id` (`custom_id`),
  KEY `custom_name` (`custom_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `content_fields_groups`
--

INSERT INTO `content_fields_groups` (`id`, `name`, `custom_name`, `custom_id`) VALUES
(1, 'Content fields of content pages', 'content_pages', 0),
(2, 'Content fields of contact us page', 'contact_us_page', 0),
(3, 'Content fields of user profile for group "admins"', 'users_profile', 1),
(4, 'Content fields of user profile for group "members"', 'users_profile', 2);

-- --------------------------------------------------------

--
-- Table structure for table `content_fields_to_groups`
--

CREATE TABLE IF NOT EXISTS `content_fields_to_groups` (
  `id` int(11) NOT NULL auto_increment,
  `field_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `order_num` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `field_id` (`field_id`,`group_id`),
  KEY `order_num` (`order_num`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `content_fields_to_groups`
--

INSERT INTO `content_fields_to_groups` (`id`, `field_id`, `group_id`, `order_num`) VALUES
(1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `content_fields_type_checkboxes`
--

CREATE TABLE IF NOT EXISTS `content_fields_type_checkboxes` (
  `id` int(11) NOT NULL auto_increment,
  `field_id` int(11) NOT NULL,
  `order_num` int(11) NOT NULL,
  `option_name` varchar(255) default 'untranslated',
  PRIMARY KEY  (`id`),
  KEY `field_id` (`field_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `content_fields_type_checkboxes_data`
--

CREATE TABLE IF NOT EXISTS `content_fields_type_checkboxes_data` (
  `id` int(11) NOT NULL auto_increment,
  `field_id` int(11) NOT NULL,
  `custom_name` varchar(255) default NULL,
  `object_id` varchar(255) default NULL,
  `field_value` varchar(255) default NULL,
  PRIMARY KEY  (`id`),
  KEY `field_id` (`field_id`),
  KEY `custom_group` (`custom_name`),
  KEY `object_id` (`object_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `content_fields_type_datesmultiple_data`
--

CREATE TABLE IF NOT EXISTS `content_fields_type_datesmultiple_data` (
  `id` int(11) NOT NULL auto_increment,
  `field_id` int(11) NOT NULL,
  `custom_name` varchar(255) NOT NULL,
  `object_id` varchar(255) NOT NULL,
  `field_value` date NOT NULL,
  `cycle_days_monday` tinyint(1) NOT NULL,
  `cycle_days_tuesday` tinyint(1) NOT NULL,
  `cycle_days_wednesday` tinyint(1) NOT NULL,
  `cycle_days_thursday` tinyint(1) NOT NULL,
  `cycle_days_friday` tinyint(1) NOT NULL,
  `cycle_days_saturday` tinyint(1) NOT NULL,
  `cycle_days_sunday` tinyint(1) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `custom_name` (`custom_name`),
  KEY `field_id` (`field_id`),
  KEY `object_id` (`object_id`),
  KEY `field_value` (`field_value`),
  KEY `cycle_days` (`cycle_days_monday`,`cycle_days_tuesday`,`cycle_days_wednesday`,`cycle_days_thursday`,`cycle_days_friday`,`cycle_days_saturday`,`cycle_days_sunday`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `content_fields_type_datetime`
--

CREATE TABLE IF NOT EXISTS `content_fields_type_datetime` (
  `id` int(11) NOT NULL auto_increment,
  `field_id` int(11) NOT NULL,
  `format` varchar(255) default NULL,
  `enable_time` tinyint(1) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `field_id` (`field_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `content_fields_type_datetimerange`
--

CREATE TABLE IF NOT EXISTS `content_fields_type_datetimerange` (
  `id` int(11) NOT NULL auto_increment,
  `field_id` int(11) NOT NULL,
  `format` varchar(255) default NULL,
  `enable_time` tinyint(1) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `field_id` (`field_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `content_fields_type_datetimerange_data`
--

CREATE TABLE IF NOT EXISTS `content_fields_type_datetimerange_data` (
  `id` int(11) NOT NULL auto_increment,
  `field_id` int(11) NOT NULL,
  `custom_name` varchar(255) default NULL,
  `object_id` varchar(255) default NULL,
  `from_field_value` datetime default NULL,
  `to_field_value` datetime NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `field_id` (`field_id`),
  KEY `custom_group` (`custom_name`),
  KEY `object_id` (`object_id`),
  KEY `from_field_value` (`from_field_value`),
  KEY `to_field_value` (`to_field_value`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `content_fields_type_datetime_data`
--

CREATE TABLE IF NOT EXISTS `content_fields_type_datetime_data` (
  `id` int(11) NOT NULL auto_increment,
  `field_id` int(11) NOT NULL,
  `custom_name` varchar(255) default NULL,
  `object_id` varchar(255) default NULL,
  `field_value` datetime default NULL,
  PRIMARY KEY  (`id`),
  KEY `field_id` (`field_id`),
  KEY `custom_group` (`custom_name`),
  KEY `object_id` (`object_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `content_fields_type_email_data`
--

CREATE TABLE IF NOT EXISTS `content_fields_type_email_data` (
  `id` int(11) NOT NULL auto_increment,
  `field_id` int(11) NOT NULL,
  `custom_name` varchar(255) default NULL,
  `object_id` varchar(255) default NULL,
  `field_value` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `field_id` (`field_id`),
  KEY `custom_group` (`custom_name`),
  KEY `object_id` (`object_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `content_fields_type_price`
--

CREATE TABLE IF NOT EXISTS `content_fields_type_price` (
  `id` int(11) NOT NULL auto_increment,
  `field_id` int(11) NOT NULL,
  `order_num` int(11) NOT NULL,
  `option_name` varchar(255) default 'untranslated',
  PRIMARY KEY  (`id`),
  KEY `field_id` (`field_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `content_fields_type_price_data`
--

CREATE TABLE IF NOT EXISTS `content_fields_type_price_data` (
  `id` int(11) NOT NULL auto_increment,
  `field_id` int(11) NOT NULL,
  `custom_name` varchar(255) default NULL,
  `object_id` varchar(255) default NULL,
  `field_currency` int(11) default NULL,
  `field_value` float(12,2) default NULL,
  PRIMARY KEY  (`id`),
  KEY `field_id` (`field_id`),
  KEY `custom_group` (`custom_name`),
  KEY `object_id` (`object_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `content_fields_type_richtext`
--

CREATE TABLE IF NOT EXISTS `content_fields_type_richtext` (
  `id` int(11) NOT NULL auto_increment,
  `field_id` int(11) NOT NULL,
  `option_name` varchar(255) default NULL,
  `value` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `field_id` (`field_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `content_fields_type_richtext_data`
--

CREATE TABLE IF NOT EXISTS `content_fields_type_richtext_data` (
  `id` int(11) NOT NULL auto_increment,
  `field_id` int(11) NOT NULL,
  `custom_name` varchar(255) default NULL,
  `object_id` varchar(255) default NULL,
  `field_value` text NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `field_id` (`field_id`),
  KEY `custom_group` (`custom_name`),
  KEY `object_id` (`object_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `content_fields_type_select`
--

CREATE TABLE IF NOT EXISTS `content_fields_type_select` (
  `id` int(11) NOT NULL auto_increment,
  `field_id` int(11) NOT NULL,
  `order_num` int(11) NOT NULL,
  `option_name` varchar(255) default 'untranslated',
  PRIMARY KEY  (`id`),
  KEY `field_id` (`field_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `content_fields_type_select_data`
--

CREATE TABLE IF NOT EXISTS `content_fields_type_select_data` (
  `id` int(11) NOT NULL auto_increment,
  `field_id` int(11) NOT NULL,
  `custom_name` varchar(255) default NULL,
  `object_id` varchar(255) default NULL,
  `field_value` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `field_id` (`field_id`),
  KEY `custom_group` (`custom_name`),
  KEY `object_id` (`object_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `content_fields_type_text`
--

CREATE TABLE IF NOT EXISTS `content_fields_type_text` (
  `id` int(11) NOT NULL auto_increment,
  `field_id` int(11) NOT NULL,
  `max_length` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `field_id` (`field_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `content_fields_type_text_data`
--

CREATE TABLE IF NOT EXISTS `content_fields_type_text_data` (
  `id` int(11) NOT NULL auto_increment,
  `field_id` int(11) NOT NULL,
  `custom_name` varchar(255) default NULL,
  `object_id` varchar(255) default NULL,
  `field_value` text NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `field_id` (`field_id`),
  KEY `custom_group` (`custom_name`),
  KEY `object_id` (`object_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `content_fields_type_varchar`
--

CREATE TABLE IF NOT EXISTS `content_fields_type_varchar` (
  `id` int(11) NOT NULL auto_increment,
  `field_id` int(11) NOT NULL,
  `max_length` varchar(255) NOT NULL,
  `regex` varchar(255) NOT NULL,
  `is_numeric` tinyint(1) default NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `field_id_2` (`field_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `content_fields_type_varchar_data`
--

CREATE TABLE IF NOT EXISTS `content_fields_type_varchar_data` (
  `id` int(11) NOT NULL auto_increment,
  `field_id` int(11) NOT NULL,
  `custom_name` varchar(255) default NULL,
  `object_id` varchar(255) default NULL,
  `field_value` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `field_id` (`field_id`),
  KEY `custom_group` (`custom_name`),
  KEY `object_id` (`object_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `content_fields_type_website`
--

CREATE TABLE IF NOT EXISTS `content_fields_type_website` (
  `id` int(11) NOT NULL auto_increment,
  `field_id` int(11) NOT NULL,
  `enable_redirect` tinyint(1) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `field_id` (`field_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `content_fields_type_website_data`
--

CREATE TABLE IF NOT EXISTS `content_fields_type_website_data` (
  `id` int(11) NOT NULL auto_increment,
  `field_id` int(11) NOT NULL,
  `custom_name` varchar(255) default NULL,
  `object_id` varchar(255) default NULL,
  `field_value` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `field_id` (`field_id`),
  KEY `custom_group` (`custom_name`),
  KEY `object_id` (`object_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `content_pages`
--

CREATE TABLE IF NOT EXISTS `content_pages` (
  `id` int(11) NOT NULL auto_increment,
  `order_num` int(11) NOT NULL,
  `url` varchar(255) default NULL,
  `title` varchar(255) default NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `in_menu` tinyint(1) NOT NULL default '0',
  `creation_date` datetime default NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `url` (`url`),
  KEY `order_num` (`order_num`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `content_pages`
--

INSERT INTO `content_pages` (`id`, `order_num`, `url`, `title`, `meta_title`, `meta_description`, `in_menu`, `creation_date`) VALUES
(1, 1, 'about', 'About us', '', '', 1, '2009-07-10 00:58:28');

-- --------------------------------------------------------

--
-- Table structure for table `email_notification_templates`
--

CREATE TABLE IF NOT EXISTS `email_notification_templates` (
  `id` int(11) NOT NULL auto_increment,
  `event` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `subject` varchar(255) NOT NULL,
  `body` text NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `event` (`event`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `email_notification_templates`
--

INSERT INTO `email_notification_templates` (`id`, `event`, `description`, `subject`, `body`) VALUES
(1, 'Listing creation', 'Notification send to user when he successfully creates new listing.\r\nTokens: LISTING_TITLE, LISTING_TYPE, LISTING_LEVEL, RECIPIENT_NAME, RECIPIENT_EMAIL', 'New listing ''%LISTING_TITLE%'' was created', 'Dear %RECIPIENT_NAME%,\n\nnew listing of type ''%LISTING_TYPE%'' of level ''%LISTING_LEVEL%'' was successfully created. Listing status become active after transaction will be completed and listing content will be approved by site manager.\n\nRegards,\n%WEBSITE_TITLE%\n%WEBSITE_URL%'),
(2, 'Listing expiration', 'Notification send to user when his listings active period has expired.\r\nTokens: LISTING_ID, LISTING_TITLE , RECIPIENT_NAME, RECIPIENT_EMAIL', 'Listing ''%LISTING_TITLE%'' has expired', 'Dear %RECIPIENT_NAME%,\r\n\r\nlisting ID: %LISTING_ID%,\r\nlisting title:''%LISTING_TITLE%''\r\nactivity period of listing has expired. Log in to users panel and prolong listing activity period.\r\n\r\nRegards,\r\n%WEBSITE_TITLE%\r\n%WEBSITE_URL%'),
(3, 'Listing prolonging', 'Notification send to user when his listings sets into prolong process after it has expired.\r\nTokens: LISTING_ID, LISTING_TITLE, LISTING_TYPE, LISTING_LEVEL, RECIPIENT_NAME, RECIPIENT_EMAIL', 'Listing ''%LISTING_TITLE%'' was prolonged', 'Dear %RECIPIENT_NAME%,\r\n\r\nlisting of type ''%LISTING_TYPE%'' of level ''%LISTING_LEVEL%'' was successfully renewed into prolongation process.\r\n\r\nRegards,\r\n%WEBSITE_TITLE%\r\n%WEBSITE_URL%'),
(4, 'Listing blocking', 'Notification send to user when his listings blocked by site administrator or site manager.\r\nTokens: LISTING_ID, LISTING_TITLE, LISTING_TYPE, LISTING_LEVEL, RECIPIENT_NAME, RECIPIENT_EMAIL', 'Listing ''%LISTING_TITLE%'' was blocked', 'Dear %RECIPIENT_NAME%,\r\n\r\nYour listing of type ''%LISTING_TYPE%'' of level ''%LISTING_LEVEL%'' was blocked by site administrator or site manager. For further information contact site administration.\r\n\r\nRegards,\r\n%WEBSITE_TITLE%\r\n%WEBSITE_URL%'),
(5, 'Listing approval', 'Notification send to user when his listings approved by site administrator or site manager.\r\nTokens: LISTING_ID, LISTING_TITLE, LISTING_TYPE, LISTING_LEVEL, RECIPIENT_NAME, RECIPIENT_EMAIL', 'Listing ''%LISTING_TITLE%'' was successfully approved', 'Dear %RECIPIENT_NAME%,\r\n\r\nyour listing of type ''%LISTING_TYPE%'' of level ''%LISTING_LEVEL%'' was successfully approved.\r\n\r\nRegards,\r\n%WEBSITE_TITLE%\r\n%WEBSITE_URL%'),
(6, 'Invoice creation', 'Notification send to user when he creates new invoice.\r\nTokens: ITEM_ID, ITEM_TITLE, PRICE_CURRENCY, PRICE_VALUE, RECIPIENT_NAME, RECIPIENT_EMAIL', 'New invoice was created', 'Dear %RECIPIENT_NAME%,\r\n\r\nnew invoice was created by your account.\r\nItem ID: %ITEM_ID%,\r\nItem title:  %ITEM_TITLE%,\r\nPrice: %PRICE_CURRENCY% %PRICE_VALUE%\r\n\r\nRegards,\r\n%WEBSITE_TITLE%\r\n%WEBSITE_URL%'),
(7, 'Account creation step 1', 'Notification send to user during registration. An email contains activation link.\r\nTokens: RECIPIENT_NAME, RECIPIENT_EMAIL, ACTIVATION_LINK', 'Go to activation link and activate your account at %WEBSITE_TITLE%', 'Dear %RECIPIENT_NAME%,\r\nHere is activation link %ACTIVATION_LINK%\r\n\r\nActivate your account using it.\r\n\r\nRegards,\n%WEBSITE_TITLE%\n%WEBSITE_URL%'),
(8, 'Account creation step 2', 'Notification send to user during registration.\r\nTokens: RECIPIENT_NAME, RECIPIENT_EMAIL', 'You was successfully registered', 'Dear %RECIPIENT_NAME%,\r\n\r\nYour account was successfully registered in the system. Log in into account in order to create/edit/delete your listings, invoices, transactions.\r\n\r\nRegards,\r\n%WEBSITE_TITLE%\r\n%WEBSITE_URL%'),
(9, 'Password recovery', 'Notification send to user when he asks to recover account password.\r\nTokens: RECIPIENT_NAME, RECIPIENT_EMAIL, ACTIVATION_LINK', 'Password recovery', 'Dear %RECIPIENT_NAME%,\r\n\r\nyou has requested password recovery. Here is activation link: %ACTIVATION_LINK%\r\n\r\nRegards,\r\n%WEBSITE_TITLE%\r\n%WEBSITE_URL%'),
(10, 'User blocking', 'Notification send to user when his account blocked by site administrator or site manager.\r\nTokens: RECIPIENT_NAME, RECIPIENT_EMAIL', 'Your account was blocked', 'Dear %RECIPIENT_NAME%,\r\n\r\nYour account was blocked by site administrator or site manager. For further information contact site administration.\r\n\r\nRegards,\r\n%WEBSITE_TITLE%\r\n%WEBSITE_URL%'),
(11, 'Review creation for listing', 'Notification send to listing owner when somebody places review on his listing.\r\nTokens: LISTING_TITLE, LISTING_URL, RECIPIENT_NAME, RECIPIENT_EMAIL, REVIEW_BODY', 'New review has been placed on your listing ''%LISTING_TITLE%''', 'Dear %RECIPIENT_NAME%,\r\n\r\nnew review has been placed on your listing ''%LISTING_TITLE%''\r\n%LISTING_URL%\r\n\r\nReview body:\r\n%REVIEW_BODY%\r\n\r\nRegards,\r\n%WEBSITE_TITLE%\r\n%WEBSITE_URL%'),
(12, 'Reply on your comment', 'Notification send to user when somebody replies on his comment.\r\nTokens: LISTING_TITLE, LISTING_URL, RECIPIENT_NAME, RECIPIENT_EMAIL, REVIEW_BODY', 'New reply on your comment for listing ''%LISTING_TITLE%''', 'Dear %RECIPIENT_NAME%,\r\n\r\ncheck new reply on your comment for listing ''%LISTING_TITLE%''\r\n%LISTING_URL%\r\n\r\nComment body:\r\n%REVIEW_BODY%\r\n\r\nRegards,\r\n%WEBSITE_TITLE%\r\n%WEBSITE_URL%'),
(13, 'Listing change level', 'Notification sends to listing owner when his listing changes level.\r\nTokens: LISTING_ID, LISTING_TITLE, RECIPIENT_NAME, NEW_LISTING_LEVEL, OLD_LISTING_LEVEL, RECIPIENT_EMAIL, REVIEW_BODY', 'Level of your listing ''%LISTING_TITLE%'' was changed', 'Dear %RECIPIENT_NAME%,\r\n\r\nlevel of your listing "%LISTING_TITLE%" was changed from "%OLD_LISTING_LEVEL%" to "%NEW_LISTING_LEVEL%".\r\nRegards,\r\n%WEBSITE_TITLE%\r\n%WEBSITE_URL%'),
(14, 'Category suggestion', 'Notification sends to site manager when user suggests new category.\r\nTokens: SUGGESTED_CATEGORY, SENDER_NAME, SENDER_EMAIL, RECIPIENT_EMAIL', 'New category was suggested', 'Dear website manager,\r\n\r\nuser %SENDER_NAME% suggested new category: %SUGGESTED_CATEGORY%\r\nNow you may approve and add this category into the list on categories management page.\r\nYou may notify user on this email: %SENDER_EMAIL%\r\n\r\n%WEBSITE_TITLE%\r\n%WEBSITE_URL%'),
(15, 'Listing claim', 'Notification sends to listing owner when user claims the listing.\r\nTokens: LISTING_TITLE, SENDER_NAME, SENDER_EMAIL, RECIPIENT_NAME, RECIPIENT_EMAIL', 'Listing was claimed', 'Dear %RECIPIENT_NAME%,\r\n\r\nuser %SENDER_NAME% claimed your listing: %LISTING_TITLE%\r\nNow you may approve or decline this claim.\r\nYou may notify user by this email: %SENDER_EMAIL%\r\n\r\n%WEBSITE_TITLE%\r\n%WEBSITE_URL%'),
(16, 'Listing claim approved', 'Notification sends to user when his claim on listing was approved.\r\nTokens: LISTING_TITLE, RECIPIENT_NAME, RECIPIENT_EMAIL', 'Claim was approved', 'Dear %RECIPIENT_NAME%,\r\n\r\nyour claim on listing: %LISTING_TITLE%\r\nwas approved\r\n\r\n%WEBSITE_TITLE%\r\n%WEBSITE_URL%'),
(17, 'Listing claim declined', 'Notification sends to user when his claim on listing was declined.\r\nTokens: LISTING_TITLE, RECIPIENT_NAME, RECIPIENT_EMAIL', 'Claim was declined', 'Dear %RECIPIENT_NAME%,\r\n\r\nyour claim on listing: %LISTING_TITLE%\r\nwas declined\r\n\r\n%WEBSITE_TITLE%\r\n%WEBSITE_URL%');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `id` int(11) NOT NULL auto_increment,
  `listing_id` int(11) NOT NULL,
  `title` varchar(255) default NULL,
  `file` varchar(255) NOT NULL,
  `creation_date` datetime NOT NULL,
  `file_size` varchar(12) default NULL,
  `file_format` varchar(9) default NULL,
  PRIMARY KEY  (`id`),
  KEY `listing_id` (`listing_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL auto_increment,
  `listing_id` int(11) NOT NULL,
  `title` varchar(255) default NULL,
  `file` varchar(255) NOT NULL,
  `creation_date` datetime NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `listing_id` (`listing_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `language_files`
--

CREATE TABLE IF NOT EXISTS `language_files` (
  `id` int(11) NOT NULL auto_increment,
  `module` varchar(255) NOT NULL default '',
  `theme` varchar(255) NOT NULL default '',
  `file` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `language_files`
--

INSERT INTO `language_files` (`id`, `module`, `theme`, `file`) VALUES
(1, 'Types and Levels', '', 'types_levels.php'),
(2, 'Admin backend panel', '', 'backend.php'),
(3, 'Admin backend panel', '', 'common.php'),
(4, 'Search', '', 'search.php'),
(5, 'Content pages', '', 'content_pages.php'),
(6, 'Authorization', '', 'login.php'),
(7, 'Google Maps', '', 'google_maps.php'),
(8, 'Content fields', '', 'content_fields.php'),
(9, 'Installation module', '', 'install.php'),
(10, 'Listings', '', 'listings.php'),
(11, 'Users', '', 'users.php'),
(12, 'Predefined Locations', '', 'locations_predefined.php'),
(13, 'AJAX Files Upload', '', 'upload.php'),
(14, 'Frontend', '', 'frontend.php'),
(15, 'Frontend', '', 'contactus.php'),
(16, 'Ratings and Reviews', '', 'ratings_reviews.php'),
(17, 'Modules Control', '', 'modules_control.php'),
(18, 'System and site settings module', '', 'settings.php'),
(19, 'Email sender', '', 'email_sender.php'),
(20, 'Categories', '', 'categories.php'),
(21, 'Notifications management', '', 'notifications.php');

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE IF NOT EXISTS `levels` (
  `id` int(11) NOT NULL auto_increment,
  `type_id` int(11) NOT NULL default '0',
  `name` varchar(255) NOT NULL default '',
  `active_years` smallint(6) NOT NULL,
  `active_months` smallint(6) NOT NULL,
  `active_days` smallint(6) NOT NULL,
  `featured` tinyint(1) NOT NULL,
  `title_enabled` tinyint(1) NOT NULL default '1',
  `seo_title_enabled` tinyint(1) NOT NULL default '1',
  `meta_enabled` tinyint(1) NOT NULL default '1',
  `description_mode` varchar(30) NOT NULL default 'enabled',
  `description_length` int(11) NOT NULL default '500',
  `categories_number` smallint(6) NOT NULL,
  `locations_number` smallint(6) NOT NULL default '1',
  `preapproved_mode` tinyint(1) NOT NULL,
  `order_num` int(11) NOT NULL default '0',
  `logo_enabled` tinyint(1) NOT NULL default '0',
  `logo_size` varchar(9) NOT NULL default '',
  `images_count` int(11) NOT NULL default '0',
  `images_size` varchar(9) NOT NULL default '',
  `images_thumbnail_size` varchar(9) NOT NULL default '',
  `video_count` int(11) NOT NULL default '0',
  `video_size` varchar(9) NOT NULL default '',
  `files_count` int(11) NOT NULL default '0',
  `maps_enabled` tinyint(1) default '0',
  `maps_size` varchar(9) default NULL,
  `option_print` tinyint(1) NOT NULL default '0',
  `option_pdf` tinyint(1) NOT NULL default '0',
  `option_quick_list` tinyint(1) NOT NULL default '0',
  `option_email_friend` tinyint(1) NOT NULL default '0',
  `option_email_owner` tinyint(1) NOT NULL default '0',
  `option_report` tinyint(1) NOT NULL default '0',
  `social_bookmarks_enabled` tinyint(1) NOT NULL default '0',
  `ratings_enabled` tinyint(1) NOT NULL,
  `reviews_mode` varchar(255) NOT NULL default 'disabled',
  `reviews_richtext_enabled` tinyint(1) NOT NULL default '0',
  `titles_template` varchar(255) NOT NULL default '%CUSTOM_TITLE%',
  `allow_to_edit_active_period` tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `type_id` (`type_id`),
  KEY `name` (`name`),
  KEY `order_num` (`order_num`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `listings`
--

CREATE TABLE IF NOT EXISTS `listings` (
  `id` int(11) NOT NULL auto_increment,
  `level_id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `seo_title` varchar(255) NOT NULL,
  `listing_description` text NOT NULL,
  `listing_meta_description` text NOT NULL,
  `listing_keywords` text NOT NULL,
  `logo_file` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `creation_date` datetime NOT NULL,
  `expiration_date` datetime NOT NULL,
  `last_modified_date` datetime NOT NULL,
  `was_prolonged_times` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `level_id` (`level_id`),
  KEY `owner_id` (`owner_id`),
  KEY `creation_date` (`creation_date`),
  KEY `status` (`status`),
  KEY `seo_title` (`seo_title`),
  FULLTEXT KEY `title` (`title`,`listing_description`,`listing_meta_description`,`listing_keywords`),
  FULLTEXT KEY `title_2` (`title`),
  FULLTEXT KEY `listing_description` (`listing_description`),
  FULLTEXT KEY `listing_meta_description` (`listing_meta_description`),
  FULLTEXT KEY `listing_keywords` (`listing_keywords`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `listings_claims`
--

CREATE TABLE IF NOT EXISTS `listings_claims` (
  `id` int(11) NOT NULL auto_increment,
  `listing_id` int(11) NOT NULL,
  `ability_to_claim` tinyint(1) NOT NULL default '0',
  `from_user_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `approved` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `listing_id` (`listing_id`),
  KEY `from_user_id` (`from_user_id`,`to_user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `listings_fields_visibility`
--

CREATE TABLE IF NOT EXISTS `listings_fields_visibility` (
  `id` int(11) NOT NULL auto_increment,
  `type_id` int(11) NOT NULL,
  `page_name` varchar(255) NOT NULL,
  `view` varchar(255) NOT NULL,
  `format` varchar(255) NOT NULL,
  `order_by` varchar(55) NOT NULL default 'l.creation_date',
  `order_direction` varchar(4) NOT NULL default 'desc',
  `levels_visible` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `type_id` (`type_id`,`page_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `listings_in_categories`
--

CREATE TABLE IF NOT EXISTS `listings_in_categories` (
  `id` int(11) NOT NULL auto_increment,
  `listing_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `listing_id` (`listing_id`,`category_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `listings_in_locations`
--

CREATE TABLE IF NOT EXISTS `listings_in_locations` (
  `id` int(11) NOT NULL auto_increment,
  `listing_id` int(11) NOT NULL,
  `geocoded_name` varchar(255) NOT NULL,
  `predefined_location_id` int(11) NOT NULL,
  `use_predefined_locations` tinyint(1) NOT NULL,
  `location` varchar(255) NOT NULL,
  `address_line_1` varchar(255) NOT NULL,
  `address_line_2` varchar(255) NOT NULL,
  `zip_or_postal_index` varchar(255) NOT NULL,
  `manual_coords` tinyint(4) NOT NULL default '0',
  `map_coords_1` float(10,6) NOT NULL,
  `map_coords_2` float(10,6) NOT NULL,
  `map_zoom` int(11) NOT NULL,
  `map_icon_id` int(11) NOT NULL,
  `map_icon_file` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `listing_id` (`listing_id`,`map_icon_id`),
  FULLTEXT KEY `geocoded_name` (`geocoded_name`,`location`,`address_line_1`,`address_line_2`,`zip_or_postal_index`),
  FULLTEXT KEY `geocoded_name_2` (`geocoded_name`),
  FULLTEXT KEY `location` (`location`),
  FULLTEXT KEY `address_line_1` (`address_line_1`),
  FULLTEXT KEY `address_line_2` (`address_line_2`),
  FULLTEXT KEY `zip_or_postal_index` (`zip_or_postal_index`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE IF NOT EXISTS `locations` (
  `id` int(11) NOT NULL auto_increment,
  `parent_id` int(11) NOT NULL default '0',
  `tree_path` varchar(255) NOT NULL,
  `use_as_label` tinyint(1) NOT NULL,
  `name` varchar(255) default 'untranslated',
  `seo_name` varchar(255) NOT NULL default '',
  `geocoded_name` varchar(255) NOT NULL,
  `en_name` varchar(255) NOT NULL default 'untranslated',
  PRIMARY KEY  (`id`),
  KEY `parent_id` (`parent_id`),
  KEY `name` (`name`),
  KEY `use_as_label` (`use_as_label`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `locations_levels`
--

CREATE TABLE IF NOT EXISTS `locations_levels` (
  `id` int(11) NOT NULL auto_increment,
  `order_num` int(11) NOT NULL default '0',
  `name` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `locations_levels`
--

INSERT INTO `locations_levels` (`id`, `order_num`, `name`) VALUES
(1, 1, 'Country'),
(2, 2, 'State'),
(3, 3, 'City');

-- --------------------------------------------------------

--
-- Table structure for table `map_marker_icons`
--

CREATE TABLE IF NOT EXISTS `map_marker_icons` (
  `id` int(11) NOT NULL auto_increment,
  `folder_name` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `theme_id` (`folder_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=478 ;

--
-- Dumping data for table `map_marker_icons`
--

INSERT INTO `map_marker_icons` (`id`, `folder_name`, `file_name`, `name`) VALUES
(1, '2', 'anniversary.png', 'anniversary.png'),
(2, '2', 'aquarium.png', 'aquarium.png'),
(3, '2', 'billiard.png', 'billiard.png'),
(4, '2', 'bowling.png', 'bowling.png'),
(5, '2', 'bullfight.png', 'bullfight.png'),
(6, '2', 'casino.png', 'casino.png'),
(7, '2', 'cinema.png', 'cinema.png'),
(8, '2', 'circus.png', 'circus.png'),
(9, '2', 'club.png', 'club.png'),
(10, '2', 'dancinghall.png', 'dancinghall.png'),
(11, '2', 'festival.png', 'festival.png'),
(12, '2', 'fireworks.png', 'fireworks.png'),
(13, '2', 'magicshow.png', 'magicshow.png'),
(14, '2', 'museum-archeological.png', 'museum-archeological.png'),
(15, '2', 'museum-art.png', 'museum-art.png'),
(16, '2', 'museum-crafts.png', 'museum-crafts.png'),
(17, '2', 'museum-historical.png', 'museum-historical.png'),
(18, '2', 'museum-naval.png', 'museum-naval.png'),
(19, '2', 'museum-science.png', 'museum-science.png'),
(20, '2', 'museum-war.png', 'museum-war.png'),
(21, '2', 'museum.png', 'museum.png'),
(22, '2', 'music-classical.png', 'music-classical.png'),
(23, '2', 'music-hiphop.png', 'music-hiphop.png'),
(24, '2', 'music-live.png', 'music-live.png'),
(25, '2', 'music-rock.png', 'music-rock.png'),
(26, '2', 'party.png', 'party.png'),
(27, '2', 'poker.png', 'poker.png'),
(28, '2', 'publicart.png', 'publicart.png'),
(29, '2', 'ropescourse.png', 'ropescourse.png'),
(30, '2', 'theater.png', 'theater.png'),
(31, '2', 'themepark.png', 'themepark.png'),
(32, '2', 'waterpark.png', 'waterpark.png'),
(33, '2', 'zoo.png', 'zoo.png'),
(34, '1', 'administration.png', 'administration.png'),
(35, '1', 'amphitheater.png', 'amphitheater.png'),
(36, '1', 'atm.png', 'atm.png'),
(37, '1', 'bank.png', 'bank.png'),
(38, '1', 'bankeuro.png', 'bankeuro.png'),
(39, '1', 'bankpound.png', 'bankpound.png'),
(40, '1', 'communitycentre.png', 'communitycentre.png'),
(41, '1', 'company.png', 'company.png'),
(42, '1', 'conference.png', 'conference.png'),
(43, '1', 'court.png', 'court.png'),
(44, '1', 'currencyexchange.png', 'currencyexchange.png'),
(45, '1', 'customs.png', 'customs.png'),
(46, '1', 'dam.png', 'dam.png'),
(47, '1', 'embassy.png', 'embassy.png'),
(48, '1', 'expert.png', 'expert.png'),
(49, '1', 'factory.png', 'factory.png'),
(50, '1', 'findajob.png', 'findajob.png'),
(51, '1', 'findjob.png', 'findjob.png'),
(52, '1', 'firemen.png', 'firemen.png'),
(53, '1', 'justice.png', 'justice.png'),
(54, '1', 'laboratory.png', 'laboratory.png'),
(55, '1', 'laundromat.png', 'laundromat.png'),
(56, '1', 'lockerrental.png', 'lockerrental.png'),
(57, '1', 'military.png', 'military.png'),
(58, '1', 'mine.png', 'mine.png'),
(59, '1', 'mobilephonetower.png', 'mobilephonetower.png'),
(60, '1', 'observatory.png', 'observatory.png'),
(61, '1', 'oilpumpjack.png', 'oilpumpjack.png'),
(62, '1', 'police.png', 'police.png'),
(63, '1', 'police2.png', 'police2.png'),
(64, '1', 'postal.png', 'postal.png'),
(65, '1', 'powerlinepole.png', 'powerlinepole.png'),
(66, '1', 'powerplant.png', 'powerplant.png'),
(67, '1', 'powersubstation.png', 'powersubstation.png'),
(68, '1', 'prison.png', 'prison.png'),
(69, '1', 'sciencecenter.png', 'sciencecenter.png'),
(70, '1', 'seniorsite.png', 'seniorsite.png'),
(71, '1', 'spaceport.png', 'spaceport.png'),
(72, '1', 'watertower.png', 'watertower.png'),
(73, '1', 'windturbine.png', 'windturbine.png'),
(74, '1', 'workoffice.png', 'workoffice.png'),
(75, '3', 'daycare.png', 'daycare.png'),
(76, '3', 'library.png', 'library.png'),
(77, '3', 'nanny.png', 'nanny.png'),
(78, '3', 'nursery.png', 'nursery.png'),
(79, '3', 'playground.png', 'playground.png'),
(80, '3', 'school.png', 'school.png'),
(81, '3', 'university.png', 'university.png'),
(82, '4', 'bomb.png', 'bomb.png'),
(83, '4', 'clouds.png', 'clouds.png'),
(84, '4', 'cloudsun.png', 'cloudsun.png'),
(85, '4', 'cluster2.png', 'cluster2.png'),
(86, '4', 'cluster3.png', 'cluster3.png'),
(87, '4', 'cluster4.png', 'cluster4.png'),
(88, '4', 'cluster5.png', 'cluster5.png'),
(89, '4', 'days-dim.png', 'days-dim.png'),
(90, '4', 'days-dom.png', 'days-dom.png'),
(91, '4', 'days-jeu.png', 'days-jeu.png'),
(92, '4', 'days-jue.png', 'days-jue.png'),
(93, '4', 'days-lun.png', 'days-lun.png'),
(94, '4', 'days-mar.png', 'days-mar.png'),
(95, '4', 'days-mer.png', 'days-mer.png'),
(96, '4', 'days-mie.png', 'days-mie.png'),
(97, '4', 'days-qua.png', 'days-qua.png'),
(98, '4', 'days-qui.png', 'days-qui.png'),
(99, '4', 'days-sab.png', 'days-sab.png'),
(100, '4', 'days-sam.png', 'days-sam.png'),
(101, '4', 'days-seg.png', 'days-seg.png'),
(102, '4', 'days-sex.png', 'days-sex.png'),
(103, '4', 'days-ter.png', 'days-ter.png'),
(104, '4', 'days-ven.png', 'days-ven.png'),
(105, '4', 'days-vie.png', 'days-vie.png'),
(106, '4', 'explosion.png', 'explosion.png'),
(107, '4', 'fire.png', 'fire.png'),
(108, '4', 'flood.png', 'flood.png'),
(109, '4', 'friday.png', 'friday.png'),
(110, '4', 'gun.png', 'gun.png'),
(111, '4', 'monday.png', 'monday.png'),
(112, '4', 'planecrash.png', 'planecrash.png'),
(113, '4', 'radiation.png', 'radiation.png'),
(114, '4', 'rain.png', 'rain.png'),
(115, '4', 'revolution.png', 'revolution.png'),
(116, '4', 'satursday.png', 'satursday.png'),
(117, '4', 'snow.png', 'snow.png'),
(118, '4', 'strike.png', 'strike.png'),
(119, '4', 'strike1.png', 'strike1.png'),
(120, '4', 'sun.png', 'sun.png'),
(121, '4', 'sunday.png', 'sunday.png'),
(122, '4', 'thunder.png', 'thunder.png'),
(123, '4', 'thursday.png', 'thursday.png'),
(124, '4', 'tuesday.png', 'tuesday.png'),
(125, '4', 'wedding.png', 'wedding.png'),
(126, '4', 'wednesday.png', 'wednesday.png'),
(127, '5', 'apartment.png', 'apartment.png'),
(128, '5', 'dates.png', 'dates.png'),
(129, '5', 'family.png', 'family.png'),
(130, '5', 'friends.png', 'friends.png'),
(131, '5', 'girlfriend.png', 'girlfriend.png'),
(132, '5', 'home.png', 'home.png'),
(133, '5', 'realestate.png', 'realestate.png'),
(134, '6', 'audio.png', 'audio.png'),
(135, '6', 'photo.png', 'photo.png'),
(136, '6', 'photodown.png', 'photodown.png'),
(137, '6', 'photodownleft.png', 'photodownleft.png'),
(138, '6', 'photodownright.png', 'photodownright.png'),
(139, '6', 'photoleft.png', 'photoleft.png'),
(140, '6', 'photoright.png', 'photoright.png'),
(141, '6', 'photoup.png', 'photoup.png'),
(142, '6', 'photoupleft.png', 'photoupleft.png'),
(143, '6', 'photoupright.png', 'photoupright.png'),
(144, '6', 'text.png', 'text.png'),
(145, '6', 'video.png', 'video.png'),
(146, '7', 'bench.png', 'bench.png'),
(147, '7', 'cluster.png', 'cluster.png'),
(148, '7', 'construction.png', 'construction.png'),
(149, '7', 'disability.png', 'disability.png'),
(150, '7', 'drinkingfountain.png', 'drinkingfountain.png'),
(151, '7', 'info.png', 'info.png'),
(152, '7', 'lock.png', 'lock.png'),
(153, '7', 'recycle.png', 'recycle.png'),
(154, '7', 'regroup.png', 'regroup.png'),
(155, '7', 'shower.png', 'shower.png'),
(156, '7', 'smokingarea.png', 'smokingarea.png'),
(157, '7', 'telephone.png', 'telephone.png'),
(158, '7', 'toilets.png', 'toilets.png'),
(159, '7', 'trash.png', 'trash.png'),
(160, '7', 'waitingroom.png', 'waitingroom.png'),
(161, '7', 'wifi.png', 'wifi.png'),
(162, '8', 'bar.png', 'bar.png'),
(163, '8', 'bungalow.png', 'bungalow.png'),
(164, '8', 'cocktail.png', 'cocktail.png'),
(165, '8', 'coffee.png', 'coffee.png'),
(166, '8', 'fastfood.png', 'fastfood.png'),
(167, '8', 'foodtruck.png', 'foodtruck.png'),
(168, '8', 'gourmet.png', 'gourmet.png'),
(169, '8', 'hostel.png', 'hostel.png'),
(170, '8', 'hotel.png', 'hotel.png'),
(171, '8', 'hotel1star.png', 'hotel1star.png'),
(172, '8', 'hotel2stars.png', 'hotel2stars.png'),
(173, '8', 'hotel3stars.png', 'hotel3stars.png'),
(174, '8', 'hotel4stars.png', 'hotel4stars.png'),
(175, '8', 'hotel5stars.png', 'hotel5stars.png'),
(176, '8', 'icecream.png', 'icecream.png'),
(177, '8', 'pizza.png', 'pizza.png'),
(178, '8', 'resort.png', 'resort.png'),
(179, '8', 'restaurant-barbecue.png', 'restaurant-barbecue.png'),
(180, '8', 'restaurant-buffet.png', 'restaurant-buffet.png'),
(181, '8', 'restaurant-fish.png', 'restaurant-fish.png'),
(182, '8', 'restaurant-romantic.png', 'restaurant-romantic.png'),
(183, '8', 'restaurant.png', 'restaurant.png'),
(184, '8', 'restaurantafrican.png', 'restaurantafrican.png'),
(185, '8', 'restaurantchinese.png', 'restaurantchinese.png'),
(186, '8', 'restaurantfishchips.png', 'restaurantfishchips.png'),
(187, '8', 'restaurantgourmet.png', 'restaurantgourmet.png'),
(188, '8', 'restaurantgreek.png', 'restaurantgreek.png'),
(189, '8', 'restaurantindian.png', 'restaurantindian.png'),
(190, '8', 'restaurantitalian.png', 'restaurantitalian.png'),
(191, '8', 'restaurantjapanese.png', 'restaurantjapanese.png'),
(192, '8', 'restaurantkebab.png', 'restaurantkebab.png'),
(193, '8', 'restaurantkorean.png', 'restaurantkorean.png'),
(194, '8', 'restaurantmediterranean.png', 'restaurantmediterranean.png'),
(195, '8', 'restaurantmexican.png', 'restaurantmexican.png'),
(196, '8', 'restaurantthai.png', 'restaurantthai.png'),
(197, '8', 'restaurantturkish.png', 'restaurantturkish.png'),
(198, '8', 'tapas.png', 'tapas.png'),
(199, '8', 'teahouse.png', 'teahouse.png'),
(200, '8', 'terrace.png', 'terrace.png'),
(201, '8', 'villa.png', 'villa.png'),
(202, '8', 'winery.png', 'winery.png'),
(203, '8', 'youthhostel.png', 'youthhostel.png'),
(204, '9', 'aestheticscenter.png', 'aestheticscenter.png'),
(205, '9', 'airplane-sport.png', 'airplane-sport.png'),
(206, '9', 'archery.png', 'archery.png'),
(207, '9', 'atv.png', 'atv.png'),
(208, '9', 'australianfootball.png', 'australianfootball.png'),
(209, '9', 'baseball.png', 'baseball.png'),
(210, '9', 'basketball.png', 'basketball.png'),
(211, '9', 'baskteball2.png', 'baskteball2.png'),
(212, '9', 'bobsleigh.png', 'bobsleigh.png'),
(213, '9', 'boxing.png', 'boxing.png'),
(214, '9', 'canoe.png', 'canoe.png'),
(215, '9', 'climbing.png', 'climbing.png'),
(216, '9', 'cricket.png', 'cricket.png'),
(217, '9', 'cyclingfeedarea.png', 'cyclingfeedarea.png'),
(218, '9', 'cyclingmountain1.png', 'cyclingmountain1.png'),
(219, '9', 'cyclingmountain2.png', 'cyclingmountain2.png'),
(220, '9', 'cyclingmountain3.png', 'cyclingmountain3.png'),
(221, '9', 'cyclingmountain4.png', 'cyclingmountain4.png'),
(222, '9', 'cyclingmountainnotrated.png', 'cyclingmountainnotrated.png'),
(223, '9', 'cyclingsport.png', 'cyclingsport.png'),
(224, '9', 'cyclingsprint.png', 'cyclingsprint.png'),
(225, '9', 'cyclinguncategorized.png', 'cyclinguncategorized.png'),
(226, '9', 'dentist.png', 'dentist.png'),
(227, '9', 'diving.png', 'diving.png'),
(228, '9', 'doctor.png', 'doctor.png'),
(229, '9', 'drugs.png', 'drugs.png'),
(230, '9', 'firstaid.png', 'firstaid.png'),
(231, '9', 'fishing.png', 'fishing.png'),
(232, '9', 'fitnesscenter.png', 'fitnesscenter.png'),
(233, '9', 'followpath.png', 'followpath.png'),
(234, '9', 'golf.png', 'golf.png'),
(235, '9', 'gym.png', 'gym.png'),
(236, '9', 'hairsalon.png', 'hairsalon.png'),
(237, '9', 'handball.png', 'handball.png'),
(238, '9', 'hanggliding.png', 'hanggliding.png'),
(239, '9', 'hiking.png', 'hiking.png'),
(240, '9', 'horseriding.png', 'horseriding.png'),
(241, '9', 'hospital.png', 'hospital.png'),
(242, '9', 'hunting.png', 'hunting.png'),
(243, '9', 'icehockey.png', 'icehockey.png'),
(244, '9', 'iceskating.png', 'iceskating.png'),
(245, '9', 'jogging.png', 'jogging.png'),
(246, '9', 'judo.png', 'judo.png'),
(247, '9', 'karate.png', 'karate.png'),
(248, '9', 'karting.png', 'karting.png'),
(249, '9', 'kayak.png', 'kayak.png'),
(250, '9', 'massage.png', 'massage.png'),
(251, '9', 'motorbike.png', 'motorbike.png'),
(252, '9', 'nordicski.png', 'nordicski.png'),
(253, '9', 'ophthalmologist.png', 'ophthalmologist.png'),
(254, '9', 'personalwatercraft.png', 'personalwatercraft.png'),
(255, '9', 'pool-indoor.png', 'pool-indoor.png'),
(256, '9', 'pool.png', 'pool.png'),
(257, '9', 'racing.png', 'racing.png'),
(258, '9', 'rowboat.png', 'rowboat.png'),
(259, '9', 'rugby.png', 'rugby.png'),
(260, '9', 'sailboat-sport.png', 'sailboat-sport.png'),
(261, '9', 'sauna.png', 'sauna.png'),
(262, '9', 'schrink.png', 'schrink.png'),
(263, '9', 'skateboarding.png', 'skateboarding.png'),
(264, '9', 'skiing.png', 'skiing.png'),
(265, '9', 'skijump.png', 'skijump.png'),
(266, '9', 'skilift.png', 'skilift.png'),
(267, '9', 'snowboarding.png', 'snowboarding.png'),
(268, '9', 'snowmobiling.png', 'snowmobiling.png'),
(269, '9', 'snowshoeing.png', 'snowshoeing.png'),
(270, '9', 'soccer.png', 'soccer.png'),
(271, '9', 'soccer2.png', 'soccer2.png'),
(272, '9', 'spelunking.png', 'spelunking.png'),
(273, '9', 'stadium.png', 'stadium.png'),
(274, '9', 'surfing.png', 'surfing.png'),
(275, '9', 'suv.png', 'suv.png'),
(276, '9', 'tennis.png', 'tennis.png'),
(277, '9', 'tennis2.png', 'tennis2.png'),
(278, '9', 'usfootball.png', 'usfootball.png'),
(279, '9', 'vet.png', 'vet.png'),
(280, '9', 'waterskiing.png', 'waterskiing.png'),
(281, '9', 'windsurfing.png', 'windsurfing.png'),
(282, '9', 'yoga.png', 'yoga.png'),
(283, '9', 'zipline.png', 'zipline.png'),
(284, '10', 'artgallery.png', 'artgallery.png'),
(285, '10', 'bags.png', 'bags.png'),
(286, '10', 'bookstore.png', 'bookstore.png'),
(287, '10', 'bread.png', 'bread.png'),
(288, '10', 'butcher.png', 'butcher.png'),
(289, '10', 'clothes-female.png', 'clothes-female.png'),
(290, '10', 'clothes-male.png', 'clothes-male.png'),
(291, '10', 'clothes.png', 'clothes.png'),
(292, '10', 'computer.png', 'computer.png'),
(293, '10', 'concessionaire.png', 'concessionaire.png'),
(294, '10', 'convenience.png', 'convenience.png'),
(295, '10', 'deptstore.png', 'deptstore.png'),
(296, '10', 'fishingshop.png', 'fishingshop.png'),
(297, '10', 'flowers.png', 'flowers.png'),
(298, '10', 'gifts.png', 'gifts.png'),
(299, '10', 'grocery.png', 'grocery.png'),
(300, '10', 'hats.png', 'hats.png'),
(301, '10', 'jewelry.png', 'jewelry.png'),
(302, '10', 'liquor.png', 'liquor.png'),
(303, '10', 'movierental.png', 'movierental.png'),
(304, '10', 'music.png', 'music.png'),
(305, '10', 'newsagent.png', 'newsagent.png'),
(306, '10', 'paint.png', 'paint.png'),
(307, '10', 'patisserie.png', 'patisserie.png'),
(308, '10', 'pens.png', 'pens.png'),
(309, '10', 'perfumery.png', 'perfumery.png'),
(310, '10', 'pets.png', 'pets.png'),
(311, '10', 'phones.png', 'phones.png'),
(312, '10', 'photography.png', 'photography.png'),
(313, '10', 'shoes.png', 'shoes.png'),
(314, '10', 'shoppingmall.png', 'shoppingmall.png'),
(315, '10', 'sneakers.png', 'sneakers.png'),
(316, '10', 'supermarket.png', 'supermarket.png'),
(317, '10', 'tailor.png', 'tailor.png'),
(318, '10', 'textiles.png', 'textiles.png'),
(319, '10', 'tools.png', 'tools.png'),
(320, '10', 'toys.png', 'toys.png'),
(321, '10', 'videogames.png', 'videogames.png'),
(322, '11', 'agriculture.png', 'agriculture.png'),
(326, '11', 'airplane-tourism.png', 'airplane-tourism.png'),
(327, '11', 'amphitheater-tourism.png', 'amphitheater-tourism.png'),
(328, '11', 'ancientmonument.png', 'ancientmonument.png'),
(329, '11', 'ancienttemple.png', 'ancienttemple.png'),
(330, '11', 'ancienttempleruin.png', 'ancienttempleruin.png'),
(331, '11', 'animals.png', 'animals.png'),
(332, '11', 'arch.png', 'arch.png'),
(333, '11', 'beach.png', 'beach.png'),
(334, '11', 'beautiful.png', 'beautiful.png'),
(335, '11', 'bigcity.png', 'bigcity.png'),
(336, '11', 'bridge.png', 'bridge.png'),
(337, '11', 'bridgemodern.png', 'bridgemodern.png'),
(338, '11', 'cabin.png', 'cabin.png'),
(339, '11', 'camping.png', 'camping.png'),
(340, '11', 'campingsite.png', 'campingsite.png'),
(341, '11', 'castle.png', 'castle.png'),
(342, '11', 'cathedral.png', 'cathedral.png'),
(343, '11', 'cathedral2.png', 'cathedral2.png'),
(344, '11', 'cave.png', 'cave.png'),
(345, '11', 'cemetary.png', 'cemetary.png'),
(346, '11', 'chapel.png', 'chapel.png'),
(347, '11', 'church.png', 'church.png'),
(348, '11', 'church2.png', 'church2.png'),
(349, '11', 'citysquare.png', 'citysquare.png'),
(350, '11', 'convent.png', 'convent.png'),
(351, '11', 'corral.png', 'corral.png'),
(352, '11', 'country.png', 'country.png'),
(353, '11', 'cross.png', 'cross.png'),
(354, '11', 'cruise.png', 'cruise.png'),
(355, '11', 'dog-leash.png', 'dog-leash.png'),
(356, '11', 'dog-offleash.png', 'dog-offleash.png'),
(357, '11', 'drinkingwater.png', 'drinkingwater.png'),
(358, '11', 'farm.png', 'farm.png'),
(359, '11', 'fjord.png', 'fjord.png'),
(360, '11', 'forest.png', 'forest.png'),
(361, '11', 'fortress.png', 'fortress.png'),
(362, '11', 'fossils.png', 'fossils.png'),
(363, '11', 'fountain.png', 'fountain.png'),
(364, '11', 'garden.png', 'garden.png'),
(365, '11', 'gateswalls.png', 'gateswalls.png'),
(366, '11', 'geyser.png', 'geyser.png'),
(367, '11', 'glacier.png', 'glacier.png'),
(368, '11', 'gondola.png', 'gondola.png'),
(369, '11', 'headstone.png', 'headstone.png'),
(370, '11', 'headstonejewish.png', 'headstonejewish.png'),
(371, '11', 'hiking-tourism.png', 'hiking-tourism.png'),
(372, '11', 'historicalquarter.png', 'historicalquarter.png'),
(373, '11', 'jewishquarter.png', 'jewishquarter.png'),
(374, '11', 'lake.png', 'lake.png'),
(375, '11', 'lighthouse.png', 'lighthouse.png'),
(376, '11', 'modernmonument.png', 'modernmonument.png'),
(377, '11', 'moderntower.png', 'moderntower.png'),
(378, '11', 'monastery.png', 'monastery.png'),
(379, '11', 'monument.png', 'monument.png'),
(380, '11', 'mosque.png', 'mosque.png'),
(381, '11', 'olympicsite.png', 'olympicsite.png'),
(382, '11', 'pagoda.png', 'pagoda.png'),
(383, '11', 'palace.png', 'palace.png'),
(384, '11', 'panoramic.png', 'panoramic.png'),
(385, '11', 'panoramic180.png', 'panoramic180.png'),
(386, '11', 'park-urban.png', 'park-urban.png'),
(387, '11', 'park.png', 'park.png'),
(388, '11', 'petroglyphs.png', 'petroglyphs.png'),
(389, '11', 'picnic.png', 'picnic.png'),
(390, '11', 'places-unvisited.png', 'places-unvisited.png'),
(391, '11', 'places-visited.png', 'places-visited.png'),
(392, '11', 'rattlesnake.png', 'rattlesnake.png'),
(393, '11', 'riparian.png', 'riparian.png'),
(394, '11', 'ruins.png', 'ruins.png'),
(395, '11', 'sailboat-tourism.png', 'sailboat-tourism.png'),
(396, '11', 'seals.png', 'seals.png'),
(397, '11', 'shelter-picnic.png', 'shelter-picnic.png'),
(398, '11', 'shelter-sleeping.png', 'shelter-sleeping.png'),
(399, '11', 'shore.png', 'shore.png'),
(400, '11', 'sight.png', 'sight.png'),
(401, '11', 'smallcity.png', 'smallcity.png'),
(402, '11', 'statue.png', 'statue.png'),
(403, '11', 'synagogue.png', 'synagogue.png'),
(404, '11', 'templehindu.png', 'templehindu.png'),
(405, '11', 'tent.png', 'tent.png'),
(406, '11', 'tower.png', 'tower.png'),
(407, '11', 'villa-tourism.png', 'villa-tourism.png'),
(408, '11', 'water.png', 'water.png'),
(409, '11', 'waterfall.png', 'waterfall.png'),
(410, '11', 'watermill.png', 'watermill.png'),
(411, '11', 'waterwell.png', 'waterwell.png'),
(412, '11', 'waterwellpump.png', 'waterwellpump.png'),
(413, '11', 'wetland.png', 'wetland.png'),
(414, '11', 'windmill.png', 'windmill.png'),
(415, '11', 'wineyard.png', 'wineyard.png'),
(416, '11', 'world.png', 'world.png'),
(417, '11', 'worldheritagesite.png', 'worldheritagesite.png'),
(418, '12', 'accident.png', 'accident.png'),
(419, '12', 'aircraft-small.png', 'aircraft-small.png'),
(420, '12', 'airport-apron.png', 'airport-apron.png'),
(421, '12', 'airport-runway.png', 'airport-runway.png'),
(422, '12', 'airport-terminal.png', 'airport-terminal.png'),
(423, '12', 'airport.png', 'airport.png'),
(424, '12', 'bicycleparking.png', 'bicycleparking.png'),
(425, '12', 'bus.png', 'bus.png'),
(426, '12', 'cablecar.png', 'cablecar.png'),
(427, '12', 'car.png', 'car.png'),
(428, '12', 'carrental.png', 'carrental.png'),
(429, '12', 'carrepair.png', 'carrepair.png'),
(430, '12', 'carwash.png', 'carwash.png'),
(431, '12', 'crossingguard.png', 'crossingguard.png'),
(432, '12', 'cycling.png', 'cycling.png'),
(433, '12', 'disabledparking.png', 'disabledparking.png'),
(434, '12', 'down.png', 'down.png'),
(435, '12', 'downleft.png', 'downleft.png'),
(436, '12', 'downright.png', 'downright.png'),
(437, '12', 'downthenleft.png', 'downthenleft.png'),
(438, '12', 'downthenright.png', 'downthenright.png'),
(439, '12', 'fallingrocks.png', 'fallingrocks.png'),
(440, '12', 'gazstation.png', 'gazstation.png'),
(441, '12', 'helicopter.png', 'helicopter.png'),
(442, '12', 'highway.png', 'highway.png'),
(443, '12', 'hotairballoon.png', 'hotairballoon.png'),
(444, '12', 'left.png', 'left.png'),
(445, '12', 'leftthendown.png', 'leftthendown.png'),
(446, '12', 'leftthenup.png', 'leftthenup.png'),
(447, '12', 'mainroad.png', 'mainroad.png'),
(448, '12', 'motorcycle.png', 'motorcycle.png'),
(449, '12', 'parkandride.png', 'parkandride.png'),
(450, '12', 'parking.png', 'parking.png'),
(451, '12', 'pedestriancrossing.png', 'pedestriancrossing.png'),
(452, '12', 'port.png', 'port.png'),
(453, '12', 'right.png', 'right.png'),
(454, '12', 'rightthendown.png', 'rightthendown.png'),
(455, '12', 'rightthenup.png', 'rightthenup.png'),
(456, '12', 'sailboat.png', 'sailboat.png'),
(457, '12', 'speedhump.png', 'speedhump.png'),
(458, '12', 'steamtrain.png', 'steamtrain.png'),
(459, '12', 'stop.png', 'stop.png'),
(460, '12', 'stoplight.png', 'stoplight.png'),
(461, '12', 'subway.png', 'subway.png'),
(462, '12', 'taxi.png', 'taxi.png'),
(463, '12', 'taxiway.png', 'taxiway.png'),
(464, '12', 'tollstation.png', 'tollstation.png'),
(465, '12', 'trafficenforcementcamera.png', 'trafficenforcementcamera.png'),
(466, '12', 'train.png', 'train.png'),
(467, '12', 'tram.png', 'tram.png'),
(468, '12', 'truck.png', 'truck.png'),
(469, '12', 'tunnel.png', 'tunnel.png'),
(470, '12', 'turnleft.png', 'turnleft.png'),
(471, '12', 'turnright.png', 'turnright.png'),
(472, '12', 'up.png', 'up.png'),
(473, '12', 'upleft.png', 'upleft.png'),
(474, '12', 'upright.png', 'upright.png'),
(475, '12', 'upthenleft.png', 'upthenleft.png'),
(476, '12', 'upthenright.png', 'upthenright.png'),
(477, '12', 'vespa.png', 'vespa.png');

-- --------------------------------------------------------

--
-- Table structure for table `map_marker_icons_themes`
--

CREATE TABLE IF NOT EXISTS `map_marker_icons_themes` (
  `id` int(11) NOT NULL auto_increment,
  `folder_name` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `map_marker_icons_themes`
--

INSERT INTO `map_marker_icons_themes` (`id`, `folder_name`, `name`) VALUES
(1, '1', 'Administration, Office & Industry'),
(2, '2', 'Culture & Entertainment'),
(3, '3', 'Education & Kids'),
(4, '4', 'Events & Weather'),
(5, '5', 'Friends, Family & Real Estate'),
(6, '6', 'Media'),
(7, '7', 'Miscellaneous'),
(8, '8', 'Restaurants & Hotels'),
(9, '9', 'Sports, Health & Beauty'),
(10, '10', 'Stores'),
(11, '11', 'Tourism & Nature'),
(12, '12', 'Transportation');

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE IF NOT EXISTS `modules` (
  `id` int(11) NOT NULL auto_increment,
  `dir` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `dir`, `name`) VALUES
(1, 'types_levels', 'Types and Levels'),
(2, 'backend', 'Admin backend panel'),
(3, 'search', 'Search'),
(4, 'content_pages', 'Content pages'),
(5, 'authorization', 'Authorization'),
(6, 'google_maps', 'Google Maps'),
(7, 'content_fields', 'Content fields'),
(8, 'install', 'Installation module'),
(9, 'listings', 'Listings'),
(10, 'users', 'Users'),
(11, 'locations_predefined', 'Predefined Locations'),
(12, 'ajax_files_upload', 'AJAX Files Upload'),
(13, 'frontend', 'Frontend'),
(14, 'ratings_reviews', 'Ratings and Reviews'),
(15, 'acl', 'Access Control List'),
(16, 'modules_control', 'Modules Control'),
(17, 'settings', 'System and site settings module'),
(18, 'email_sender', 'Email sender'),
(19, 'categories', 'Categories'),
(20, 'notifications', 'Notifications management');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE IF NOT EXISTS `ratings` (
  `id` int(11) NOT NULL auto_increment,
  `objects_table` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `object_id` int(11) NOT NULL,
  `value` tinyint(1) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `date_added` datetime NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `user_id` (`user_id`),
  KEY `object_id` (`object_id`),
  KEY `objects_table` (`objects_table`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `id` int(11) NOT NULL auto_increment,
  `parent_id` int(11) NOT NULL,
  `objects_table` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `anonym_email` varchar(255) NOT NULL,
  `anonym_name` varchar(255) NOT NULL,
  `object_id` int(11) NOT NULL,
  `review` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `date_added` datetime NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `objects_table` (`objects_table`),
  KEY `object_id` (`object_id`),
  KEY `parent_id` (`parent_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `search_fields_groups`
--

CREATE TABLE IF NOT EXISTS `search_fields_groups` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `custom_name` varchar(255) NOT NULL,
  `custom_id` int(11) NOT NULL,
  `mode` varchar(25) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `custom_name` (`custom_name`,`custom_id`,`mode`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `search_fields_groups`
--

INSERT INTO `search_fields_groups` (`id`, `name`, `custom_name`, `custom_id`, `mode`) VALUES
(1, 'Search fields of the global search', 'global_search', 0, 'quick'),
(2, 'Search fields of the global search', 'global_search', 0, 'advanced');

-- --------------------------------------------------------

--
-- Table structure for table `search_fields_to_groups`
--

CREATE TABLE IF NOT EXISTS `search_fields_to_groups` (
  `id` int(11) NOT NULL auto_increment,
  `field_id` int(11) NOT NULL,
  `search_group_id` int(11) NOT NULL,
  `order_num` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `field_id` (`field_id`,`search_group_id`),
  KEY `order_num` (`order_num`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `search_fields_type_email`
--

CREATE TABLE IF NOT EXISTS `search_fields_type_email` (
  `id` int(11) NOT NULL auto_increment,
  `field_id` int(11) NOT NULL,
  `search_type` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `field_id` (`field_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `search_fields_type_price`
--

CREATE TABLE IF NOT EXISTS `search_fields_type_price` (
  `id` int(11) NOT NULL auto_increment,
  `field_id` int(11) NOT NULL,
  `search_type` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `field_id` (`field_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `search_fields_type_price_options`
--

CREATE TABLE IF NOT EXISTS `search_fields_type_price_options` (
  `id` int(11) NOT NULL auto_increment,
  `field_id` int(11) NOT NULL,
  `option_name` varchar(255) default 'untranslated',
  `order_num` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `search_fields_type_richtext`
--

CREATE TABLE IF NOT EXISTS `search_fields_type_richtext` (
  `id` int(11) NOT NULL auto_increment,
  `field_id` int(11) NOT NULL,
  `search_type` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `field_id` (`field_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `search_fields_type_text`
--

CREATE TABLE IF NOT EXISTS `search_fields_type_text` (
  `id` int(11) NOT NULL auto_increment,
  `field_id` int(11) NOT NULL,
  `search_type` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `field_id` (`field_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `search_fields_type_varchar`
--

CREATE TABLE IF NOT EXISTS `search_fields_type_varchar` (
  `id` int(11) NOT NULL auto_increment,
  `field_id` int(11) NOT NULL,
  `search_type` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `field_id` (`field_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `search_fields_type_varchar_options`
--

CREATE TABLE IF NOT EXISTS `search_fields_type_varchar_options` (
  `id` int(11) NOT NULL auto_increment,
  `field_id` int(11) NOT NULL,
  `option_name` varchar(255) default 'untranslated',
  `order_num` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `search_fields_type_website`
--

CREATE TABLE IF NOT EXISTS `search_fields_type_website` (
  `id` int(11) NOT NULL auto_increment,
  `field_id` int(11) NOT NULL,
  `search_type` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `field_id` (`field_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE IF NOT EXISTS `site_settings` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) default NULL,
  `value` text,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `name`, `value`) VALUES
(1, 'website_title', 'Barang Elektronik'),
(2, 'description', ''),
(3, 'keywords', ''),
(4, 'company_details', ''),
(5, 'signature_in_emails', '');

-- --------------------------------------------------------

--
-- Table structure for table `system_settings`
--

CREATE TABLE IF NOT EXISTS `system_settings` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) default NULL,
  `value` text,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `system_settings`
--

INSERT INTO `system_settings` (`id`, `name`, `value`) VALUES
(1, 'site_logo_file', ''),
(2, 'design_theme', 'default'),
(3, 'default_language', 'en'),
(4, 'google_analytics_account_id', ''),
(5, 'google_analytics_profile_id', ''),
(6, 'google_analytics_email', ''),
(7, 'google_analytics_password', ''),
(8, 'youtube_key', ''),
(9, 'youtube_username', ''),
(10, 'youtube_password', ''),
(11, 'youtube_product_name', ''),
(12, 'website_email', 'sales@barangelektronik.com'),
(13, 'auto_blocker_timestamp', '1334215053'),
(14, 'global_what_search', '1'),
(15, 'global_where_search', '1'),
(16, 'global_categories_search', '1'),
(17, 'single_type_structure', '0'),
(18, 'categories_block_type', 'categories-bar'),
(19, 'W2D_VERSION', '3.1.0'),
(20, 'search_in_raduis_measure', 'miles'),
(21, 'anonym_rates_reviews', '0'),
(22, 'enable_contactus_page', '1'),
(23, 'predefined_locations_mode', 'only'),
(24, 'path_to_terms_and_conditions', ''),
(25, 'geocoded_locations_mode_districts', '1'),
(26, 'geocoded_locations_mode_provinces', '1'),
(27, 'mollom_public_key', ''),
(28, 'mollom_private_key', ''),
(29, 'completed_installation', '1');

-- --------------------------------------------------------

--
-- Table structure for table `themes`
--

CREATE TABLE IF NOT EXISTS `themes` (
  `id` int(11) NOT NULL auto_increment,
  `dir` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `installed` tinyint(1) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE IF NOT EXISTS `types` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL default '',
  `seo_name` varchar(255) NOT NULL default '',
  `meta_title` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `locations_enabled` tinyint(1) NOT NULL default '0',
  `zip_enabled` tinyint(1) NOT NULL default '0',
  `order_num` int(11) NOT NULL default '0',
  `search_type` varchar(255) NOT NULL,
  `what_search` tinyint(1) NOT NULL default '0',
  `where_search` tinyint(1) NOT NULL default '0',
  `categories_search` tinyint(1) NOT NULL default '1',
  `categories_type` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `categories_search` (`categories_search`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL auto_increment,
  `group_id` int(11) NOT NULL default '0',
  `status` int(11) NOT NULL default '2',
  `login` varchar(255) default NULL,
  `seo_login` varchar(255) NOT NULL,
  `meta_description` text NOT NULL,
  `meta_keywords` text NOT NULL,
  `password` varchar(255) default NULL,
  `user_logo_image` varchar(255) NOT NULL,
  `email` varchar(255) default NULL,
  `last_ip` varchar(15) NOT NULL,
  `last_login_date` datetime NOT NULL,
  `registration_date` datetime NOT NULL,
  `registration_hash` varchar(255) default NULL,
  PRIMARY KEY  (`id`),
  KEY `status` (`status`),
  KEY `group_id` (`group_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `group_id`, `status`, `login`, `seo_login`, `meta_description`, `meta_keywords`, `password`, `user_logo_image`, `email`, `last_ip`, `last_login_date`, `registration_date`, `registration_hash`) VALUES
(1, 1, 2, 'admin', '', '', '', 'f3ecb79b1700ab780ce037e2e8cdb738', '', 'budiperkasa@ovi.com', '110.138.152.122', '2012-04-12 06:17:33', '2012-04-12 04:38:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` int(11) NOT NULL auto_increment,
  `default_group` tinyint(1) default '0',
  `may_register` tinyint(1) NOT NULL default '0',
  `name` varchar(255) default NULL,
  `is_own_page` tinyint(1) NOT NULL default '1',
  `use_seo_name` tinyint(1) NOT NULL default '1',
  `meta_enabled` tinyint(1) NOT NULL default '1',
  `logo_enabled` tinyint(1) NOT NULL default '1',
  `logo_size` varchar(9) NOT NULL default '147*120',
  `logo_thumbnail_size` varchar(9) NOT NULL default '64*64',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `default_group`, `may_register`, `name`, `is_own_page`, `use_seo_name`, `meta_enabled`, `logo_enabled`, `logo_size`, `logo_thumbnail_size`) VALUES
(1, 0, 0, 'admins', 1, 1, 1, 1, '147*120', '24*24'),
(2, 1, 1, 'members', 1, 1, 1, 1, '147*120', '24*24');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups_content_permissions`
--

CREATE TABLE IF NOT EXISTS `users_groups_content_permissions` (
  `id` int(11) NOT NULL auto_increment,
  `group_id` int(11) NOT NULL,
  `objects_name` varchar(255) NOT NULL,
  `object_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `object_name` (`objects_name`),
  KEY `group_id` (`group_id`),
  KEY `object_id` (`object_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users_groups_permissions`
--

CREATE TABLE IF NOT EXISTS `users_groups_permissions` (
  `id` int(11) NOT NULL auto_increment,
  `group_id` int(11) NOT NULL default '0',
  `function_access` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `group_id` (`group_id`,`function_access`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `users_groups_permissions`
--

INSERT INTO `users_groups_permissions` (`id`, `group_id`, `function_access`) VALUES
(1, 1, 'Edit self profile'),
(2, 1, 'Manage users'),
(3, 1, 'Modules control'),
(4, 1, 'Edit system settings'),
(5, 1, 'Manage self listings'),
(6, 1, 'Change listing level'),
(7, 1, 'Manage all listings'),
(8, 1, 'Edit categories'),
(9, 1, 'View all statistics'),
(10, 1, 'Manage content fields'),
(11, 1, 'Admin backend'),
(12, 1, 'Manage types and levels'),
(13, 1, 'Create listings'),
(14, 1, 'Manage payment settings'),
(15, 1, 'View all invoices'),
(16, 1, 'View self invoices'),
(17, 1, 'View all transactions'),
(18, 1, 'View self transactions'),
(19, 1, 'Manage email notifications'),
(20, 1, 'Manage content pages'),
(21, 1, 'Site settings edit'),
(22, 1, 'Edit web services settings'),
(23, 1, 'Manage all ratings'),
(24, 1, 'Manage all reviews'),
(25, 1, 'Manage self reviews'),
(26, 1, 'Manage self ratings'),
(27, 1, 'Create transaction manually'),
(28, 1, 'Edit listings expiration date'),
(29, 1, 'Manage predefined locations'),
(30, 2, 'Edit self profile'),
(31, 2, 'Manage self listings'),
(32, 2, 'Create listings'),
(33, 2, 'View self invoices'),
(34, 2, 'View self transactions'),
(35, 2, 'View self statistics'),
(36, 2, 'Manage self ratings'),
(37, 2, 'Manage self reviews');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `id` int(11) NOT NULL auto_increment,
  `listing_id` int(11) NOT NULL,
  `mode` varchar(255) NOT NULL,
  `status` varchar(30) NOT NULL,
  `error_code` varchar(255) NOT NULL,
  `title` varchar(255) default NULL,
  `video_code` varchar(255) NOT NULL,
  `creation_date` datetime NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `listing_id` (`listing_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
