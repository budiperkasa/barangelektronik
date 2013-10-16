CREATE TABLE `email_notification_templates` (
  `id` int(11) NOT NULL auto_increment,
  `event` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `subject` varchar(255) NOT NULL,
  `body` text NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `event` (`event`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

INSERT INTO `email_notification_templates` VALUES (1, 'Listing creation', 'Notification send to user when he successfully creates new listing.\r\nTokens: LISTING_TITLE, LISTING_TYPE, LISTING_LEVEL, RECIPIENT_NAME, RECIPIENT_EMAIL', 'New listing ''%LISTING_TITLE%'' was created', 'Dear %RECIPIENT_NAME%,\n\nnew listing of type ''%LISTING_TYPE%'' of level ''%LISTING_LEVEL%'' was successfully created. Listing status become active after transaction will be completed and listing content will be approved by site manager.\n\nRegards,\n%WEBSITE_TITLE%\n%WEBSITE_URL%');
INSERT INTO `email_notification_templates` VALUES (2, 'Listing expiration', 'Notification send to user when his listings active period has expired.\r\nTokens: LISTING_ID, LISTING_TITLE , RECIPIENT_NAME, RECIPIENT_EMAIL', 'Listing ''%LISTING_TITLE%'' has expired', 'Dear %RECIPIENT_NAME%,\r\n\r\nlisting ID: %LISTING_ID%,\r\nlisting title:''%LISTING_TITLE%''\r\nactivity period of listing has expired. Log in to users panel and prolong listing activity period.\r\n\r\nRegards,\r\n%WEBSITE_TITLE%\r\n%WEBSITE_URL%');
INSERT INTO `email_notification_templates` VALUES (3, 'Listing prolonging', 'Notification send to user when his listings sets into prolong process after it has expired.\r\nTokens: LISTING_ID, LISTING_TITLE, LISTING_TYPE, LISTING_LEVEL, RECIPIENT_NAME, RECIPIENT_EMAIL', 'Listing ''%LISTING_TITLE%'' was prolonged', 'Dear %RECIPIENT_NAME%,\r\n\r\nlisting of type ''%LISTING_TYPE%'' of level ''%LISTING_LEVEL%'' was successfully renewed into prolongation process.\r\n\r\nRegards,\r\n%WEBSITE_TITLE%\r\n%WEBSITE_URL%');
INSERT INTO `email_notification_templates` VALUES (4, 'Listing blocking', 'Notification send to user when his listings blocked by site administrator or site manager.\r\nTokens: LISTING_ID, LISTING_TITLE, LISTING_TYPE, LISTING_LEVEL, RECIPIENT_NAME, RECIPIENT_EMAIL', 'Listing ''%LISTING_TITLE%'' was blocked', 'Dear %RECIPIENT_NAME%,\r\n\r\nYour listing of type ''%LISTING_TYPE%'' of level ''%LISTING_LEVEL%'' was blocked by site administrator or site manager. For further information contact site administration.\r\n\r\nRegards,\r\n%WEBSITE_TITLE%\r\n%WEBSITE_URL%');
INSERT INTO `email_notification_templates` VALUES (5, 'Listing approval', 'Notification send to user when his listings approved by site administrator or site manager.\r\nTokens: LISTING_ID, LISTING_TITLE, LISTING_TYPE, LISTING_LEVEL, RECIPIENT_NAME, RECIPIENT_EMAIL', 'Listing ''%LISTING_TITLE%'' was successfully approved', 'Dear %RECIPIENT_NAME%,\r\n\r\nyour listing of type ''%LISTING_TYPE%'' of level ''%LISTING_LEVEL%'' was successfully approved.\r\n\r\nRegards,\r\n%WEBSITE_TITLE%\r\n%WEBSITE_URL%');
INSERT INTO `email_notification_templates` VALUES (6, 'Invoice creation', 'Notification send to user when he creates new invoice.\r\nTokens: ITEM_ID, ITEM_TITLE, PRICE_CURRENCY, PRICE_VALUE, RECIPIENT_NAME, RECIPIENT_EMAIL', 'New invoice was created', 'Dear %RECIPIENT_NAME%,\r\n\r\nnew invoice was created by your account.\r\nItem ID: %ITEM_ID%,\r\nItem title:  %ITEM_TITLE%,\r\nPrice: %PRICE_CURRENCY% %PRICE_VALUE%\r\n\r\nRegards,\r\n%WEBSITE_TITLE%\r\n%WEBSITE_URL%');
INSERT INTO `email_notification_templates` VALUES (7, 'Account creation step 1', 'Notification send to user during registration. An email contains activation link.\r\nTokens: RECIPIENT_NAME, RECIPIENT_EMAIL, ACTIVATION_LINK', 'Go to activation link and activate your account at %WEBSITE_TITLE%', 'Dear %RECIPIENT_NAME%,\r\nHere is activation link %ACTIVATION_LINK%\r\n\r\nActivate your account using it.\r\n\r\nRegards,\n%WEBSITE_TITLE%\n%WEBSITE_URL%');
INSERT INTO `email_notification_templates` VALUES (8, 'Account creation step 2', 'Notification send to user during registration.\r\nTokens: RECIPIENT_NAME, RECIPIENT_EMAIL', 'You was successfully registered', 'Dear %RECIPIENT_NAME%,\r\n\r\nYour account was successfully registered in the system. Log in into account in order to create/edit/delete your listings, invoices, transactions.\r\n\r\nRegards,\r\n%WEBSITE_TITLE%\r\n%WEBSITE_URL%');
INSERT INTO `email_notification_templates` VALUES (9, 'Password recovery', 'Notification send to user when he asks to recover account password.\r\nTokens: RECIPIENT_NAME, RECIPIENT_EMAIL, ACTIVATION_LINK', 'Password recovery', 'Dear %RECIPIENT_NAME%,\r\n\r\nyou has requested password recovery. Here is activation link: %ACTIVATION_LINK%\r\n\r\nRegards,\r\n%WEBSITE_TITLE%\r\n%WEBSITE_URL%');
INSERT INTO `email_notification_templates` VALUES (10, 'User blocking', 'Notification send to user when his account blocked by site administrator or site manager.\r\nTokens: RECIPIENT_NAME, RECIPIENT_EMAIL', 'Your account was blocked', 'Dear %RECIPIENT_NAME%,\r\n\r\nYour account was blocked by site administrator or site manager. For further information contact site administration.\r\n\r\nRegards,\r\n%WEBSITE_TITLE%\r\n%WEBSITE_URL%');
INSERT INTO `email_notification_templates` VALUES (11, 'Review creation for listing', 'Notification send to listing owner when somebody places review on his listing.\r\nTokens: LISTING_TITLE, LISTING_URL, RECIPIENT_NAME, RECIPIENT_EMAIL, REVIEW_BODY', 'New review has been placed on your listing ''%LISTING_TITLE%''', 'Dear %RECIPIENT_NAME%,\r\n\r\nnew review has been placed on your listing ''%LISTING_TITLE%''\r\n%LISTING_URL%\r\n\r\nReview body:\r\n%REVIEW_BODY%\r\n\r\nRegards,\r\n%WEBSITE_TITLE%\r\n%WEBSITE_URL%');
INSERT INTO `email_notification_templates` VALUES (12, 'Reply on your comment', 'Notification send to user when somebody replies on his comment.\r\nTokens: LISTING_TITLE, LISTING_URL, RECIPIENT_NAME, RECIPIENT_EMAIL, REVIEW_BODY', 'New reply on your comment for listing ''%LISTING_TITLE%''', 'Dear %RECIPIENT_NAME%,\r\n\r\ncheck new reply on your comment for listing ''%LISTING_TITLE%''\r\n%LISTING_URL%\r\n\r\nComment body:\r\n%REVIEW_BODY%\r\n\r\nRegards,\r\n%WEBSITE_TITLE%\r\n%WEBSITE_URL%');
INSERT INTO `email_notification_templates` VALUES (13, 'Listing change level', 'Notification sends to listing owner when his listing changes level.\r\nTokens: LISTING_ID, LISTING_TITLE, RECIPIENT_NAME, NEW_LISTING_LEVEL, OLD_LISTING_LEVEL, RECIPIENT_EMAIL, REVIEW_BODY', 'Level of your listing ''%LISTING_TITLE%'' was changed', 'Dear %RECIPIENT_NAME%,\r\n\r\nlevel of your listing "%LISTING_TITLE%" was changed from "%OLD_LISTING_LEVEL%" to "%NEW_LISTING_LEVEL%".\r\nRegards,\r\n%WEBSITE_TITLE%\r\n%WEBSITE_URL%');
INSERT INTO `email_notification_templates` VALUES (14, 'Category suggestion', 'Notification sends to site manager when user suggests new category.\r\nTokens: SUGGESTED_CATEGORY, SENDER_NAME, SENDER_EMAIL, RECIPIENT_EMAIL', 'New category was suggested', 'Dear website manager,\r\n\r\nuser %SENDER_NAME% suggested new category: %SUGGESTED_CATEGORY%\r\n\Now you may approve and add this category into the list on categories management page.\r\nYou may notify user on this email: %SENDER_EMAIL%\r\n\r\n%WEBSITE_TITLE%\r\n%WEBSITE_URL%');
INSERT INTO `email_notification_templates` VALUES (15, 'Listing claim', 'Notification sends to listing owner when user claims the listing.\r\nTokens: LISTING_TITLE, SENDER_NAME, SENDER_EMAIL, RECIPIENT_NAME, RECIPIENT_EMAIL', 'Listing was claimed', 'Dear %RECIPIENT_NAME%,\r\n\r\nuser %SENDER_NAME% claimed your listing: %LISTING_TITLE%\r\nNow you may approve or decline this claim.\r\nYou may notify user by this email: %SENDER_EMAIL%\r\n\r\n%WEBSITE_TITLE%\r\n%WEBSITE_URL%');
INSERT INTO `email_notification_templates` VALUES (16, 'Listing claim approved', 'Notification sends to user when his claim on listing was approved.\r\nTokens: LISTING_TITLE, RECIPIENT_NAME, RECIPIENT_EMAIL', 'Claim was approved', 'Dear %RECIPIENT_NAME%,\r\n\r\nyour claim on listing: %LISTING_TITLE%\r\nwas approved\r\n\r\n%WEBSITE_TITLE%\r\n%WEBSITE_URL%');
INSERT INTO `email_notification_templates` VALUES (17, 'Listing claim declined', 'Notification sends to user when his claim on listing was declined.\r\nTokens: LISTING_TITLE, RECIPIENT_NAME, RECIPIENT_EMAIL', 'Claim was declined', 'Dear %RECIPIENT_NAME%,\r\n\r\nyour claim on listing: %LISTING_TITLE%\r\nwas declined\r\n\r\n%WEBSITE_TITLE%\r\n%WEBSITE_URL%');