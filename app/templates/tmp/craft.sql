# Dump of table craft_assetfiles
# ------------------------------------------------------------

DROP TABLE IF EXISTS `craft_assetfiles`;

CREATE TABLE `craft_assetfiles` (
  `id` int(11) NOT NULL,
  `sourceId` int(11) DEFAULT NULL,
  `folderId` int(11) NOT NULL,
  `filename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kind` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'unknown',
  `width` smallint(6) unsigned DEFAULT NULL,
  `height` smallint(6) unsigned DEFAULT NULL,
  `size` int(11) unsigned DEFAULT NULL,
  `dateModified` datetime DEFAULT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `craft_assetfiles_filename_folderId_unq_idx` (`filename`,`folderId`),
  KEY `craft_assetfiles_sourceId_fk` (`sourceId`),
  KEY `craft_assetfiles_folderId_fk` (`folderId`),
  CONSTRAINT `craft_assetfiles_folderId_fk` FOREIGN KEY (`folderId`) REFERENCES `craft_assetfolders` (`id`) ON DELETE CASCADE,
  CONSTRAINT `craft_assetfiles_id_fk` FOREIGN KEY (`id`) REFERENCES `craft_elements` (`id`) ON DELETE CASCADE,
  CONSTRAINT `craft_assetfiles_sourceId_fk` FOREIGN KEY (`sourceId`) REFERENCES `craft_assetsources` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table craft_assetfolders
# ------------------------------------------------------------

DROP TABLE IF EXISTS `craft_assetfolders`;

CREATE TABLE `craft_assetfolders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parentId` int(11) DEFAULT NULL,
  `sourceId` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `craft_assetfolders_name_parentId_sourceId_unq_idx` (`name`,`parentId`,`sourceId`),
  KEY `craft_assetfolders_parentId_fk` (`parentId`),
  KEY `craft_assetfolders_sourceId_fk` (`sourceId`),
  CONSTRAINT `craft_assetfolders_sourceId_fk` FOREIGN KEY (`sourceId`) REFERENCES `craft_assetsources` (`id`) ON DELETE CASCADE,
  CONSTRAINT `craft_assetfolders_parentId_fk` FOREIGN KEY (`parentId`) REFERENCES `craft_assetfolders` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `craft_assetfolders` WRITE;
/*!40000 ALTER TABLE `craft_assetfolders` DISABLE KEYS */;

INSERT INTO `craft_assetfolders` (`id`, `parentId`, `sourceId`, `name`, `path`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(1,NULL,1,'Images','','2014-04-30 13:53:28','2014-04-30 13:53:28','081b9b7c-d3ae-41cd-967f-d14c161c8123');

/*!40000 ALTER TABLE `craft_assetfolders` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table craft_assetindexdata
# ------------------------------------------------------------

DROP TABLE IF EXISTS `craft_assetindexdata`;

CREATE TABLE `craft_assetindexdata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sessionId` varchar(36) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `sourceId` int(10) NOT NULL,
  `offset` int(10) NOT NULL,
  `uri` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `size` int(10) DEFAULT NULL,
  `recordId` int(10) DEFAULT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `craft_assetindexdata_sessionId_sourceId_offset_unq_idx` (`sessionId`,`sourceId`,`offset`),
  KEY `craft_assetindexdata_sourceId_fk` (`sourceId`),
  CONSTRAINT `craft_assetindexdata_sourceId_fk` FOREIGN KEY (`sourceId`) REFERENCES `craft_assetsources` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table craft_assetsources
# ------------------------------------------------------------

DROP TABLE IF EXISTS `craft_assetsources`;

CREATE TABLE `craft_assetsources` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `settings` text COLLATE utf8_unicode_ci,
  `sortOrder` tinyint(4) DEFAULT NULL,
  `fieldLayoutId` int(10) DEFAULT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `craft_assetsources_name_unq_idx` (`name`),
  KEY `craft_assetsources_fieldLayoutId_fk` (`fieldLayoutId`),
  CONSTRAINT `craft_assetsources_fieldLayoutId_fk` FOREIGN KEY (`fieldLayoutId`) REFERENCES `craft_fieldlayouts` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `craft_assetsources` WRITE;
/*!40000 ALTER TABLE `craft_assetsources` DISABLE KEYS */;

INSERT INTO `craft_assetsources` (`id`, `name`, `type`, `settings`, `sortOrder`, `fieldLayoutId`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(1,'Images','Local','{\"path\":\"{fileSystemPath}images\\/\",\"url\":\"\\/images\\/\"}',1,7,'2014-04-30 13:53:28','2014-04-30 13:53:28','1eb6edaa-718c-44f1-ae53-0130bc241a2a');

/*!40000 ALTER TABLE `craft_assetsources` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table craft_assettransformindex
# ------------------------------------------------------------

DROP TABLE IF EXISTS `craft_assettransformindex`;

CREATE TABLE `craft_assettransformindex` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fileId` int(11) NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sourceId` int(11) NOT NULL,
  `fileExists` tinyint(1) DEFAULT NULL,
  `inProgress` tinyint(1) DEFAULT NULL,
  `dateIndexed` datetime DEFAULT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `craft_assettransformindex_sourceId_fileId_location_idx` (`sourceId`,`fileId`,`location`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table craft_assettransforms
# ------------------------------------------------------------

DROP TABLE IF EXISTS `craft_assettransforms`;

CREATE TABLE `craft_assettransforms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `handle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mode` enum('stretch','fit','crop') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'crop',
  `position` enum('top-left','top-center','top-right','center-left','center-center','center-right','bottom-left','bottom-center','bottom-right') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'center-center',
  `height` int(10) DEFAULT NULL,
  `width` int(10) DEFAULT NULL,
  `quality` int(10) DEFAULT NULL,
  `dimensionChangeTime` datetime DEFAULT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `craft_assettransforms_name_unq_idx` (`name`),
  UNIQUE KEY `craft_assettransforms_handle_unq_idx` (`handle`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table craft_categories
# ------------------------------------------------------------

DROP TABLE IF EXISTS `craft_categories`;

CREATE TABLE `craft_categories` (
  `id` int(11) NOT NULL,
  `groupId` int(11) NOT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `craft_categories_groupId_fk` (`groupId`),
  CONSTRAINT `craft_categories_groupId_fk` FOREIGN KEY (`groupId`) REFERENCES `craft_categorygroups` (`id`) ON DELETE CASCADE,
  CONSTRAINT `craft_categories_id_fk` FOREIGN KEY (`id`) REFERENCES `craft_elements` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table craft_categorygroups
# ------------------------------------------------------------

DROP TABLE IF EXISTS `craft_categorygroups`;

CREATE TABLE `craft_categorygroups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `structureId` int(11) NOT NULL,
  `fieldLayoutId` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `handle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hasUrls` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `template` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `craft_categorygroups_name_unq_idx` (`name`),
  UNIQUE KEY `craft_categorygroups_handle_unq_idx` (`handle`),
  KEY `craft_categorygroups_structureId_fk` (`structureId`),
  KEY `craft_categorygroups_fieldLayoutId_fk` (`fieldLayoutId`),
  CONSTRAINT `craft_categorygroups_fieldLayoutId_fk` FOREIGN KEY (`fieldLayoutId`) REFERENCES `craft_fieldlayouts` (`id`) ON DELETE SET NULL,
  CONSTRAINT `craft_categorygroups_structureId_fk` FOREIGN KEY (`structureId`) REFERENCES `craft_structures` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table craft_categorygroups_i18n
# ------------------------------------------------------------

DROP TABLE IF EXISTS `craft_categorygroups_i18n`;

CREATE TABLE `craft_categorygroups_i18n` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `groupId` int(11) NOT NULL,
  `locale` char(12) COLLATE utf8_unicode_ci NOT NULL,
  `urlFormat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nestedUrlFormat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `craft_categorygroups_i18n_groupId_locale_unq_idx` (`groupId`,`locale`),
  KEY `craft_categorygroups_i18n_locale_fk` (`locale`),
  CONSTRAINT `craft_categorygroups_i18n_locale_fk` FOREIGN KEY (`locale`) REFERENCES `craft_locales` (`locale`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `craft_categorygroups_i18n_groupId_fk` FOREIGN KEY (`groupId`) REFERENCES `craft_categorygroups` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table craft_content
# ------------------------------------------------------------

DROP TABLE IF EXISTS `craft_content`;

CREATE TABLE `craft_content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `elementId` int(11) NOT NULL,
  `locale` char(12) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `field_heading` text COLLATE utf8_unicode_ci,
  `field_body` text COLLATE utf8_unicode_ci,
  `field_metaDescription` text COLLATE utf8_unicode_ci,
  `field_metaTitle` text COLLATE utf8_unicode_ci,
  `field_className` text COLLATE utf8_unicode_ci,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `craft_content_elementId_locale_unq_idx` (`elementId`,`locale`),
  KEY `craft_content_title_idx` (`title`),
  KEY `craft_content_locale_fk` (`locale`),
  CONSTRAINT `craft_content_elementId_fk` FOREIGN KEY (`elementId`) REFERENCES `craft_elements` (`id`) ON DELETE CASCADE,
  CONSTRAINT `craft_content_locale_fk` FOREIGN KEY (`locale`) REFERENCES `craft_locales` (`locale`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `craft_content` WRITE;
/*!40000 ALTER TABLE `craft_content` DISABLE KEYS */;

INSERT INTO `craft_content` (`id`, `elementId`, `locale`, `title`, `field_heading`, `field_body`, `field_metaDescription`, `field_metaTitle`, `field_className`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(1,1,'en_us',NULL,NULL,NULL,NULL,NULL,NULL,'2014-04-30 13:25:21','2014-04-30 13:25:21','2d1fdf13-1a91-44d5-aeef-e96ac9421997');

INSERT INTO `craft_content` (`id`, `elementId`, `locale`, `title`, `field_heading`, `field_body`, `field_metaDescription`, `field_metaTitle`, `field_className`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(2,2,'en_us','Homepage','Welcome to Craft.dev!','<p>It’s true, this site doesn’t have a whole lot of content yet, but don’t worry. Our web developers have just installed the CMS, and they’re setting things up for the content editors this very moment. Soon Craft.dev will be an oasis of fresh perspectives, sharp analyses, and astute opinions that will keep you coming back again and again.</p>','','',NULL,'2014-04-30 13:25:22','2014-05-01 17:31:11','6f4d4adc-d8a0-4c32-aa72-29dbb8eeed21');

INSERT INTO `craft_content` (`id`, `elementId`, `locale`, `title`, `field_heading`, `field_body`, `field_metaDescription`, `field_metaTitle`, `field_className`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(4,4,'en_us','First-Level Page',NULL,NULL,'','',NULL,'2014-04-30 14:07:59','2014-05-01 17:30:59','78240f1c-c8fb-4649-baa4-d8a4355d071c');

INSERT INTO `craft_content` (`id`, `elementId`, `locale`, `title`, `field_heading`, `field_body`, `field_metaDescription`, `field_metaTitle`, `field_className`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(5,5,'en_us','Second-Level Page',NULL,NULL,'','',NULL,'2014-04-30 14:08:12','2014-05-01 17:30:50','937ff1d2-c47e-4b88-a5f8-777eca6d2567');

INSERT INTO `craft_content` (`id`, `elementId`, `locale`, `title`, `field_heading`, `field_body`, `field_metaDescription`, `field_metaTitle`, `field_className`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(6,6,'en_us',NULL,NULL,NULL,'Please update the default description','Default Title',NULL,'2014-04-30 16:40:45','2014-04-30 16:46:26','5f442db0-9d9f-4766-b211-731f675492b9');

/*!40000 ALTER TABLE `craft_content` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table craft_deprecationerrors
# ------------------------------------------------------------

DROP TABLE IF EXISTS `craft_deprecationerrors`;

CREATE TABLE `craft_deprecationerrors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fingerprint` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastOccurrence` datetime NOT NULL,
  `file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `line` smallint(6) unsigned NOT NULL,
  `class` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `method` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `template` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `templateLine` smallint(6) unsigned DEFAULT NULL,
  `message` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `traces` text COLLATE utf8_unicode_ci,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `craft_deprecationerrors_key_fingerprint_unq_idx` (`key`,`fingerprint`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table craft_elements
# ------------------------------------------------------------

DROP TABLE IF EXISTS `craft_elements`;

CREATE TABLE `craft_elements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `archived` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `craft_elements_type_idx` (`type`),
  KEY `craft_elements_enabled_idx` (`enabled`),
  KEY `craft_elements_archived_idx` (`archived`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `craft_elements` WRITE;
/*!40000 ALTER TABLE `craft_elements` DISABLE KEYS */;

INSERT INTO `craft_elements` (`id`, `type`, `enabled`, `archived`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(1,'User',1,0,'2014-04-30 13:25:21','2014-04-30 13:25:21','dae07aa7-bc1f-4a6b-af72-e8c508f41609');

INSERT INTO `craft_elements` (`id`, `type`, `enabled`, `archived`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(2,'Entry',1,0,'2014-04-30 13:25:22','2014-05-01 17:31:11','b16899e6-3e1e-491c-94d1-038ef2046c54');

INSERT INTO `craft_elements` (`id`, `type`, `enabled`, `archived`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(4,'Entry',1,0,'2014-04-30 14:07:59','2014-05-01 17:30:59','76b084bb-01ea-42d7-bcf8-8cb080362a8c');

INSERT INTO `craft_elements` (`id`, `type`, `enabled`, `archived`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(5,'Entry',1,0,'2014-04-30 14:08:12','2014-05-01 17:30:50','2d58ac69-b1e9-43a5-9d11-d2786ca333d6');

INSERT INTO `craft_elements` (`id`, `type`, `enabled`, `archived`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(6,'GlobalSet',1,0,'2014-04-30 16:40:45','2014-04-30 16:46:26','7d327b5e-49d7-43e6-817d-03ebf602b632');

/*!40000 ALTER TABLE `craft_elements` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table craft_elements_i18n
# ------------------------------------------------------------

DROP TABLE IF EXISTS `craft_elements_i18n`;

CREATE TABLE `craft_elements_i18n` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `elementId` int(11) NOT NULL,
  `locale` char(12) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `uri` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `enabled` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `craft_elements_i18n_elementId_locale_unq_idx` (`elementId`,`locale`),
  UNIQUE KEY `craft_elements_i18n_uri_locale_unq_idx` (`uri`,`locale`),
  KEY `craft_elements_i18n_slug_locale_idx` (`slug`,`locale`),
  KEY `craft_elements_i18n_enabled_idx` (`enabled`),
  KEY `craft_elements_i18n_locale_fk` (`locale`),
  CONSTRAINT `craft_elements_i18n_locale_fk` FOREIGN KEY (`locale`) REFERENCES `craft_locales` (`locale`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `craft_elements_i18n_elementId_fk` FOREIGN KEY (`elementId`) REFERENCES `craft_elements` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `craft_elements_i18n` WRITE;
/*!40000 ALTER TABLE `craft_elements_i18n` DISABLE KEYS */;

INSERT INTO `craft_elements_i18n` (`id`, `elementId`, `locale`, `slug`, `uri`, `enabled`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(1,1,'en_us','',NULL,1,'2014-04-30 13:25:21','2014-04-30 13:25:21','c63be938-54ea-4102-9a41-97e684f16c1e');

INSERT INTO `craft_elements_i18n` (`id`, `elementId`, `locale`, `slug`, `uri`, `enabled`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(2,2,'en_us','homepage','__home__',1,'2014-04-30 13:25:22','2014-05-01 17:31:11','013683fa-03db-4598-888b-f30e14f3b849');

INSERT INTO `craft_elements_i18n` (`id`, `elementId`, `locale`, `slug`, `uri`, `enabled`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(4,4,'en_us','first-level-page','first-level-page',1,'2014-04-30 14:08:00','2014-05-01 17:30:59','a9697bc8-70a4-4c03-ae37-d74f472c1abc');

INSERT INTO `craft_elements_i18n` (`id`, `elementId`, `locale`, `slug`, `uri`, `enabled`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(5,5,'en_us','second-level-page','first-level-page/second-level-page',1,'2014-04-30 14:08:13','2014-05-01 17:30:59','7df00d26-e7f1-409a-93e5-46cd547b73c2');

INSERT INTO `craft_elements_i18n` (`id`, `elementId`, `locale`, `slug`, `uri`, `enabled`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(6,6,'en_us','',NULL,1,'2014-04-30 16:40:45','2014-04-30 16:46:26','961b2010-1642-4844-85a1-5c1bfa67b40f');

/*!40000 ALTER TABLE `craft_elements_i18n` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table craft_emailmessages
# ------------------------------------------------------------

DROP TABLE IF EXISTS `craft_emailmessages`;

CREATE TABLE `craft_emailmessages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key` char(150) COLLATE utf8_unicode_ci NOT NULL,
  `locale` char(12) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `craft_emailmessages_key_locale_unq_idx` (`key`,`locale`),
  KEY `craft_emailmessages_locale_fk` (`locale`),
  CONSTRAINT `craft_emailmessages_locale_fk` FOREIGN KEY (`locale`) REFERENCES `craft_locales` (`locale`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table craft_entries
# ------------------------------------------------------------

DROP TABLE IF EXISTS `craft_entries`;

CREATE TABLE `craft_entries` (
  `id` int(11) NOT NULL,
  `sectionId` int(11) NOT NULL,
  `typeId` int(11) DEFAULT NULL,
  `authorId` int(11) DEFAULT NULL,
  `postDate` datetime DEFAULT NULL,
  `expiryDate` datetime DEFAULT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `craft_entries_sectionId_idx` (`sectionId`),
  KEY `craft_entries_typeId_idx` (`typeId`),
  KEY `craft_entries_postDate_idx` (`postDate`),
  KEY `craft_entries_expiryDate_idx` (`expiryDate`),
  KEY `craft_entries_authorId_fk` (`authorId`),
  CONSTRAINT `craft_entries_authorId_fk` FOREIGN KEY (`authorId`) REFERENCES `craft_users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `craft_entries_id_fk` FOREIGN KEY (`id`) REFERENCES `craft_elements` (`id`) ON DELETE CASCADE,
  CONSTRAINT `craft_entries_sectionId_fk` FOREIGN KEY (`sectionId`) REFERENCES `craft_sections` (`id`) ON DELETE CASCADE,
  CONSTRAINT `craft_entries_typeId_fk` FOREIGN KEY (`typeId`) REFERENCES `craft_entrytypes` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `craft_entries` WRITE;
/*!40000 ALTER TABLE `craft_entries` DISABLE KEYS */;

INSERT INTO `craft_entries` (`id`, `sectionId`, `typeId`, `authorId`, `postDate`, `expiryDate`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(2,1,1,NULL,'2014-04-30 13:25:22',NULL,'2014-04-30 13:25:22','2014-05-01 17:31:11','b5f63133-d284-4a50-b9c3-32725ba9e637');

INSERT INTO `craft_entries` (`id`, `sectionId`, `typeId`, `authorId`, `postDate`, `expiryDate`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(4,3,3,1,'2014-04-30 14:07:00',NULL,'2014-04-30 14:08:00','2014-05-01 17:30:59','127eb26e-97e0-4a7d-9a7f-bd4762db5f18');

INSERT INTO `craft_entries` (`id`, `sectionId`, `typeId`, `authorId`, `postDate`, `expiryDate`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(5,3,3,1,'2014-04-30 14:08:00',NULL,'2014-04-30 14:08:13','2014-05-01 17:30:50','3134bb7f-3ff4-418c-b7ef-4d1bdfaa6dc9');

/*!40000 ALTER TABLE `craft_entries` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table craft_entrydrafts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `craft_entrydrafts`;

CREATE TABLE `craft_entrydrafts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `entryId` int(11) NOT NULL,
  `sectionId` int(11) NOT NULL,
  `creatorId` int(11) NOT NULL,
  `locale` char(12) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `craft_entrydrafts_entryId_locale_idx` (`entryId`,`locale`),
  KEY `craft_entrydrafts_sectionId_fk` (`sectionId`),
  KEY `craft_entrydrafts_creatorId_fk` (`creatorId`),
  KEY `craft_entrydrafts_locale_fk` (`locale`),
  CONSTRAINT `craft_entrydrafts_locale_fk` FOREIGN KEY (`locale`) REFERENCES `craft_locales` (`locale`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `craft_entrydrafts_creatorId_fk` FOREIGN KEY (`creatorId`) REFERENCES `craft_users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `craft_entrydrafts_entryId_fk` FOREIGN KEY (`entryId`) REFERENCES `craft_entries` (`id`) ON DELETE CASCADE,
  CONSTRAINT `craft_entrydrafts_sectionId_fk` FOREIGN KEY (`sectionId`) REFERENCES `craft_sections` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table craft_entrytypes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `craft_entrytypes`;

CREATE TABLE `craft_entrytypes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sectionId` int(11) NOT NULL,
  `fieldLayoutId` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `handle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hasTitleField` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `titleLabel` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'Title',
  `titleFormat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sortOrder` tinyint(4) DEFAULT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `craft_entrytypes_name_sectionId_unq_idx` (`name`,`sectionId`),
  UNIQUE KEY `craft_entrytypes_handle_sectionId_unq_idx` (`handle`,`sectionId`),
  KEY `craft_entrytypes_sectionId_fk` (`sectionId`),
  KEY `craft_entrytypes_fieldLayoutId_fk` (`fieldLayoutId`),
  CONSTRAINT `craft_entrytypes_fieldLayoutId_fk` FOREIGN KEY (`fieldLayoutId`) REFERENCES `craft_fieldlayouts` (`id`) ON DELETE SET NULL,
  CONSTRAINT `craft_entrytypes_sectionId_fk` FOREIGN KEY (`sectionId`) REFERENCES `craft_sections` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `craft_entrytypes` WRITE;
/*!40000 ALTER TABLE `craft_entrytypes` DISABLE KEYS */;

INSERT INTO `craft_entrytypes` (`id`, `sectionId`, `fieldLayoutId`, `name`, `handle`, `hasTitleField`, `titleLabel`, `titleFormat`, `sortOrder`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(1,1,15,'Homepage','homepage',1,NULL,NULL,NULL,'2014-04-30 13:25:22','2014-04-30 20:13:52','7936a0e8-1027-402d-9db2-0a963b4f21dc');

INSERT INTO `craft_entrytypes` (`id`, `sectionId`, `fieldLayoutId`, `name`, `handle`, `hasTitleField`, `titleLabel`, `titleFormat`, `sortOrder`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(2,2,5,'News','news',1,'Title',NULL,NULL,'2014-04-30 13:25:22','2014-04-30 13:25:22','3f9b5aad-92fe-4ce0-b400-15fd747a5f75');

INSERT INTO `craft_entrytypes` (`id`, `sectionId`, `fieldLayoutId`, `name`, `handle`, `hasTitleField`, `titleLabel`, `titleFormat`, `sortOrder`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(3,3,14,'Pages','pages',1,'Title',NULL,NULL,'2014-04-30 13:52:08','2014-04-30 20:12:51','653e8103-a1cf-4139-981a-339d929df00b');

INSERT INTO `craft_entrytypes` (`id`, `sectionId`, `fieldLayoutId`, `name`, `handle`, `hasTitleField`, `titleLabel`, `titleFormat`, `sortOrder`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(4,4,17,'Section Modifiers','modifiers',1,'Title',NULL,NULL,'2014-04-30 14:00:31','2014-04-30 20:32:12','e391df35-8095-44e2-9cd6-5ef4e5d77cd4');

/*!40000 ALTER TABLE `craft_entrytypes` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table craft_entryversions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `craft_entryversions`;

CREATE TABLE `craft_entryversions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `entryId` int(11) NOT NULL,
  `sectionId` int(11) NOT NULL,
  `creatorId` int(11) DEFAULT NULL,
  `locale` char(12) COLLATE utf8_unicode_ci NOT NULL,
  `notes` tinytext COLLATE utf8_unicode_ci,
  `data` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `craft_entryversions_entryId_locale_idx` (`entryId`,`locale`),
  KEY `craft_entryversions_sectionId_fk` (`sectionId`),
  KEY `craft_entryversions_creatorId_fk` (`creatorId`),
  KEY `craft_entryversions_locale_fk` (`locale`),
  CONSTRAINT `craft_entryversions_locale_fk` FOREIGN KEY (`locale`) REFERENCES `craft_locales` (`locale`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `craft_entryversions_creatorId_fk` FOREIGN KEY (`creatorId`) REFERENCES `craft_users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `craft_entryversions_entryId_fk` FOREIGN KEY (`entryId`) REFERENCES `craft_entries` (`id`) ON DELETE CASCADE,
  CONSTRAINT `craft_entryversions_sectionId_fk` FOREIGN KEY (`sectionId`) REFERENCES `craft_sections` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table craft_fieldgroups
# ------------------------------------------------------------

DROP TABLE IF EXISTS `craft_fieldgroups`;

CREATE TABLE `craft_fieldgroups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `craft_fieldgroups_name_unq_idx` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `craft_fieldgroups` WRITE;
/*!40000 ALTER TABLE `craft_fieldgroups` DISABLE KEYS */;

INSERT INTO `craft_fieldgroups` (`id`, `name`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(1,'Default','2014-04-30 13:25:22','2014-04-30 13:25:22','ae9f021d-621d-49c1-bf71-af87e599cf0a');

INSERT INTO `craft_fieldgroups` (`id`, `name`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(2,'SEO Defaults','2014-04-30 16:41:21','2014-04-30 16:41:21','905b756a-c68a-4ec3-a215-e38599d7a2e5');

INSERT INTO `craft_fieldgroups` (`id`, `name`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(3,'Section Modifiers','2014-04-30 18:46:24','2014-04-30 18:46:24','a0949ee2-3d39-46f9-a42b-cffeb0072226');

/*!40000 ALTER TABLE `craft_fieldgroups` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table craft_fieldlayoutfields
# ------------------------------------------------------------

DROP TABLE IF EXISTS `craft_fieldlayoutfields`;

CREATE TABLE `craft_fieldlayoutfields` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `layoutId` int(11) NOT NULL,
  `tabId` int(11) DEFAULT NULL,
  `fieldId` int(11) NOT NULL,
  `required` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `sortOrder` tinyint(4) DEFAULT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `craft_fieldlayoutfields_layoutId_fieldId_unq_idx` (`layoutId`,`fieldId`),
  KEY `craft_fieldlayoutfields_sortOrder_idx` (`sortOrder`),
  KEY `craft_fieldlayoutfields_tabId_fk` (`tabId`),
  KEY `craft_fieldlayoutfields_fieldId_fk` (`fieldId`),
  CONSTRAINT `craft_fieldlayoutfields_fieldId_fk` FOREIGN KEY (`fieldId`) REFERENCES `craft_fields` (`id`) ON DELETE CASCADE,
  CONSTRAINT `craft_fieldlayoutfields_layoutId_fk` FOREIGN KEY (`layoutId`) REFERENCES `craft_fieldlayouts` (`id`) ON DELETE CASCADE,
  CONSTRAINT `craft_fieldlayoutfields_tabId_fk` FOREIGN KEY (`tabId`) REFERENCES `craft_fieldlayouttabs` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `craft_fieldlayoutfields` WRITE;
/*!40000 ALTER TABLE `craft_fieldlayoutfields` DISABLE KEYS */;

INSERT INTO `craft_fieldlayoutfields` (`id`, `layoutId`, `tabId`, `fieldId`, `required`, `sortOrder`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(3,5,2,2,1,1,'2014-04-30 13:25:22','2014-04-30 13:25:22','ac298b10-417f-4262-9317-6d9634126553');

INSERT INTO `craft_fieldlayoutfields` (`id`, `layoutId`, `tabId`, `fieldId`, `required`, `sortOrder`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(4,5,2,3,0,2,'2014-04-30 13:25:22','2014-04-30 13:25:22','8469d5f8-4207-4eea-9492-2411bbce0de7');

INSERT INTO `craft_fieldlayoutfields` (`id`, `layoutId`, `tabId`, `fieldId`, `required`, `sortOrder`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(15,13,NULL,10,0,1,'2014-04-30 16:44:25','2014-04-30 16:44:25','57d1ff09-70eb-46b2-9105-2ae839a33355');

INSERT INTO `craft_fieldlayoutfields` (`id`, `layoutId`, `tabId`, `fieldId`, `required`, `sortOrder`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(16,13,NULL,9,0,2,'2014-04-30 16:44:25','2014-04-30 16:44:25','e9ed7f78-6a83-419a-bf16-23b58466f0c5');

INSERT INTO `craft_fieldlayoutfields` (`id`, `layoutId`, `tabId`, `fieldId`, `required`, `sortOrder`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(17,14,4,4,0,1,'2014-04-30 20:12:51','2014-04-30 20:12:51','f3b46daf-7054-43ec-b80a-3fa8ede119b4');

INSERT INTO `craft_fieldlayoutfields` (`id`, `layoutId`, `tabId`, `fieldId`, `required`, `sortOrder`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(18,14,5,10,0,1,'2014-04-30 20:12:51','2014-04-30 20:12:51','0bcae183-23fc-4eb0-aa7d-1348fc8d9ee9');

INSERT INTO `craft_fieldlayoutfields` (`id`, `layoutId`, `tabId`, `fieldId`, `required`, `sortOrder`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(19,14,5,9,0,2,'2014-04-30 20:12:51','2014-04-30 20:12:51','8532484d-7e05-49b7-8d1f-690c312edde2');

INSERT INTO `craft_fieldlayoutfields` (`id`, `layoutId`, `tabId`, `fieldId`, `required`, `sortOrder`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(20,15,6,4,0,1,'2014-04-30 20:13:52','2014-04-30 20:13:52','e8280fe4-b701-4cd2-b7b2-9830b7be567c');

INSERT INTO `craft_fieldlayoutfields` (`id`, `layoutId`, `tabId`, `fieldId`, `required`, `sortOrder`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(21,15,7,10,0,1,'2014-04-30 20:13:52','2014-04-30 20:13:52','44baec18-019f-483a-ae5c-e3e0c5be6045');

INSERT INTO `craft_fieldlayoutfields` (`id`, `layoutId`, `tabId`, `fieldId`, `required`, `sortOrder`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(22,15,7,9,0,2,'2014-04-30 20:13:52','2014-04-30 20:13:52','cd2a609e-a99e-433a-9a7b-57735e6218ab');

INSERT INTO `craft_fieldlayoutfields` (`id`, `layoutId`, `tabId`, `fieldId`, `required`, `sortOrder`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(23,16,NULL,5,0,1,'2014-04-30 20:24:18','2014-04-30 20:24:18','17870487-99d3-4897-9c60-99460e5b3529');

INSERT INTO `craft_fieldlayoutfields` (`id`, `layoutId`, `tabId`, `fieldId`, `required`, `sortOrder`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(24,16,NULL,7,0,2,'2014-04-30 20:24:18','2014-04-30 20:24:18','461983ea-5572-4b82-a84e-e2e137a4c77b');

INSERT INTO `craft_fieldlayoutfields` (`id`, `layoutId`, `tabId`, `fieldId`, `required`, `sortOrder`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(25,16,NULL,8,0,3,'2014-04-30 20:24:18','2014-04-30 20:24:18','e09219c0-38b2-4d5c-ae45-a0ec15842ec1');

INSERT INTO `craft_fieldlayoutfields` (`id`, `layoutId`, `tabId`, `fieldId`, `required`, `sortOrder`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(26,17,8,11,0,1,'2014-04-30 20:32:12','2014-04-30 20:32:12','451a2374-df31-4898-b323-386557a435cd');

/*!40000 ALTER TABLE `craft_fieldlayoutfields` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table craft_fieldlayouts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `craft_fieldlayouts`;

CREATE TABLE `craft_fieldlayouts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `craft_fieldlayouts_type_idx` (`type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `craft_fieldlayouts` WRITE;
/*!40000 ALTER TABLE `craft_fieldlayouts` DISABLE KEYS */;

INSERT INTO `craft_fieldlayouts` (`id`, `type`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(1,'Tag','2014-04-30 13:25:22','2014-04-30 13:25:22','f7977d4f-641a-4d79-972c-698d97d314cb');

INSERT INTO `craft_fieldlayouts` (`id`, `type`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(5,'Entry','2014-04-30 13:25:22','2014-04-30 13:25:22','38b4c1be-82e7-49b8-85e6-7071351f6d05');

INSERT INTO `craft_fieldlayouts` (`id`, `type`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(7,'Asset','2014-04-30 13:53:28','2014-04-30 13:53:28','ad5a0699-1fb2-465d-957f-b56588975964');

INSERT INTO `craft_fieldlayouts` (`id`, `type`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(13,'GlobalSet','2014-04-30 16:44:25','2014-04-30 16:44:25','18e066f5-8bca-43bf-9b0b-c08f2109a600');

INSERT INTO `craft_fieldlayouts` (`id`, `type`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(14,'Entry','2014-04-30 20:12:51','2014-04-30 20:12:51','0dd5e69c-6a81-4258-a50d-9d8a68b09d98');

INSERT INTO `craft_fieldlayouts` (`id`, `type`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(15,'Entry','2014-04-30 20:13:52','2014-04-30 20:13:52','c41d7ff2-07cc-4d79-b5be-3bb5bd9756da');

INSERT INTO `craft_fieldlayouts` (`id`, `type`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(16,'MatrixBlock','2014-04-30 20:24:18','2014-04-30 20:24:18','94fe8275-51f8-4159-abe6-544a5fb7bf4d');

INSERT INTO `craft_fieldlayouts` (`id`, `type`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(17,'Entry','2014-04-30 20:32:12','2014-04-30 20:32:12','7ef16021-25bc-4942-9ff9-e28356fb219f');

/*!40000 ALTER TABLE `craft_fieldlayouts` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table craft_fieldlayouttabs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `craft_fieldlayouttabs`;

CREATE TABLE `craft_fieldlayouttabs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `layoutId` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sortOrder` tinyint(4) DEFAULT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `craft_fieldlayouttabs_sortOrder_idx` (`sortOrder`),
  KEY `craft_fieldlayouttabs_layoutId_fk` (`layoutId`),
  CONSTRAINT `craft_fieldlayouttabs_layoutId_fk` FOREIGN KEY (`layoutId`) REFERENCES `craft_fieldlayouts` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `craft_fieldlayouttabs` WRITE;
/*!40000 ALTER TABLE `craft_fieldlayouttabs` DISABLE KEYS */;

INSERT INTO `craft_fieldlayouttabs` (`id`, `layoutId`, `name`, `sortOrder`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(2,5,'Content',1,'2014-04-30 13:25:22','2014-04-30 13:25:22','af4fcfff-7a7c-4616-a3aa-e96faf3e7c1d');

INSERT INTO `craft_fieldlayouttabs` (`id`, `layoutId`, `name`, `sortOrder`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(4,14,'Tab 1',1,'2014-04-30 20:12:51','2014-04-30 20:12:51','55717d50-90f5-4ebc-8606-aca411e45b5a');

INSERT INTO `craft_fieldlayouttabs` (`id`, `layoutId`, `name`, `sortOrder`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(5,14,'SEO',2,'2014-04-30 20:12:51','2014-04-30 20:12:51','3390266e-9c9a-4ce7-9224-fd49ed91ca81');

INSERT INTO `craft_fieldlayouttabs` (`id`, `layoutId`, `name`, `sortOrder`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(6,15,'Content',1,'2014-04-30 20:13:52','2014-04-30 20:13:52','d3fe8afe-3595-4f5b-b090-2d6a887998fa');

INSERT INTO `craft_fieldlayouttabs` (`id`, `layoutId`, `name`, `sortOrder`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(7,15,'SEO',2,'2014-04-30 20:13:52','2014-04-30 20:13:52','17a79130-2817-4de5-8675-f6095fc2ff69');

INSERT INTO `craft_fieldlayouttabs` (`id`, `layoutId`, `name`, `sortOrder`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(8,17,'Class Name',1,'2014-04-30 20:32:12','2014-04-30 20:32:12','bb5b5bd8-0ec0-44fc-9570-9e8bb071db27');

/*!40000 ALTER TABLE `craft_fieldlayouttabs` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table craft_fields
# ------------------------------------------------------------

DROP TABLE IF EXISTS `craft_fields`;

CREATE TABLE `craft_fields` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `groupId` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `handle` varchar(58) COLLATE utf8_unicode_ci NOT NULL,
  `context` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'global',
  `instructions` text COLLATE utf8_unicode_ci,
  `translatable` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `type` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `settings` text COLLATE utf8_unicode_ci,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `craft_fields_handle_context_unq_idx` (`handle`,`context`),
  KEY `craft_fields_context_idx` (`context`),
  KEY `craft_fields_groupId_fk` (`groupId`),
  CONSTRAINT `craft_fields_groupId_fk` FOREIGN KEY (`groupId`) REFERENCES `craft_fieldgroups` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `craft_fields` WRITE;
/*!40000 ALTER TABLE `craft_fields` DISABLE KEYS */;

INSERT INTO `craft_fields` (`id`, `groupId`, `name`, `handle`, `context`, `instructions`, `translatable`, `type`, `settings`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(1,1,'Heading','heading','global',NULL,1,'PlainText',NULL,'2014-04-30 13:25:22','2014-04-30 13:25:22','7ad59fe8-b271-4e24-bf99-dd2f7e29a355');

INSERT INTO `craft_fields` (`id`, `groupId`, `name`, `handle`, `context`, `instructions`, `translatable`, `type`, `settings`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(2,1,'Body','body','global',NULL,1,'RichText','{\"configFile\":\"Standard.json\"}','2014-04-30 13:25:22','2014-04-30 13:25:22','d82504cc-8dcd-440f-92a6-e733c5120878');

INSERT INTO `craft_fields` (`id`, `groupId`, `name`, `handle`, `context`, `instructions`, `translatable`, `type`, `settings`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(3,1,'Tags','tags','global',NULL,0,'Tags','{\"source\":\"taggroup:1\"}','2014-04-30 13:25:22','2014-04-30 13:25:22','e601c874-2768-4ae9-9b83-42a848bec43e');

INSERT INTO `craft_fields` (`id`, `groupId`, `name`, `handle`, `context`, `instructions`, `translatable`, `type`, `settings`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(4,1,'Sections','sections','global','Construct a page by putting different blocks together.',0,'Matrix','{\"maxBlocks\":null}','2014-04-30 14:01:34','2014-04-30 20:24:18','94178f64-d50d-44ee-8dca-fa515dc1ec37');

INSERT INTO `craft_fields` (`id`, `groupId`, `name`, `handle`, `context`, `instructions`, `translatable`, `type`, `settings`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(5,NULL,'Header','header','matrixBlockType:1',NULL,0,'RichText','{\"configFile\":\"Standard.json\",\"cleanupHtml\":\"1\"}','2014-04-30 14:01:34','2014-04-30 20:24:18','40a41ce6-5edc-4cf6-91d6-516fd2fec8f4');

INSERT INTO `craft_fields` (`id`, `groupId`, `name`, `handle`, `context`, `instructions`, `translatable`, `type`, `settings`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(7,NULL,'Body','body','matrixBlockType:1',NULL,0,'RichText','{\"configFile\":\"Standard.json\",\"cleanupHtml\":\"1\"}','2014-04-30 14:01:34','2014-04-30 20:24:18','4251b8a9-cc11-4f90-a2c2-ce3eb964e318');

INSERT INTO `craft_fields` (`id`, `groupId`, `name`, `handle`, `context`, `instructions`, `translatable`, `type`, `settings`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(8,NULL,'Modifiers','modifiers','matrixBlockType:1',NULL,0,'Entries','{\"sources\":[\"section:4\"],\"limit\":\"\"}','2014-04-30 14:01:34','2014-04-30 20:24:18','e05e09b2-204f-4cb5-be4b-3d8d1fd0dbb9');

INSERT INTO `craft_fields` (`id`, `groupId`, `name`, `handle`, `context`, `instructions`, `translatable`, `type`, `settings`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(9,2,'Meta Description','metaDescription','global','',0,'PlainText','{\"placeholder\":\"\",\"maxLength\":\"\",\"multiline\":\"\",\"initialRows\":\"4\"}','2014-04-30 16:41:52','2014-04-30 16:41:52','2df2c840-a733-4ce4-b42f-9d6fa67245b2');

INSERT INTO `craft_fields` (`id`, `groupId`, `name`, `handle`, `context`, `instructions`, `translatable`, `type`, `settings`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(10,2,'Meta Title','metaTitle','global','',0,'PlainText','{\"placeholder\":\"\",\"maxLength\":\"\",\"multiline\":\"\",\"initialRows\":\"4\"}','2014-04-30 16:42:05','2014-04-30 16:42:05','a50cdc2b-ac2f-4887-ae9f-3142be2d8915');

INSERT INTO `craft_fields` (`id`, `groupId`, `name`, `handle`, `context`, `instructions`, `translatable`, `type`, `settings`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(11,3,'Class Name','className','global','One (or more) CSS classes that should be added when this modifier is used.',0,'PlainText','{\"placeholder\":\"\",\"maxLength\":\"\",\"multiline\":\"\",\"initialRows\":\"4\"}','2014-04-30 18:48:09','2014-04-30 18:48:09','7429d068-dced-4b05-8db4-0ab5cfa6f5d1');

/*!40000 ALTER TABLE `craft_fields` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table craft_globalsets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `craft_globalsets`;

CREATE TABLE `craft_globalsets` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `handle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fieldLayoutId` int(10) DEFAULT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `craft_globalsets_name_unq_idx` (`name`),
  UNIQUE KEY `craft_globalsets_handle_unq_idx` (`handle`),
  KEY `craft_globalsets_fieldLayoutId_fk` (`fieldLayoutId`),
  CONSTRAINT `craft_globalsets_fieldLayoutId_fk` FOREIGN KEY (`fieldLayoutId`) REFERENCES `craft_fieldlayouts` (`id`) ON DELETE SET NULL,
  CONSTRAINT `craft_globalsets_id_fk` FOREIGN KEY (`id`) REFERENCES `craft_elements` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `craft_globalsets` WRITE;
/*!40000 ALTER TABLE `craft_globalsets` DISABLE KEYS */;

INSERT INTO `craft_globalsets` (`id`, `name`, `handle`, `fieldLayoutId`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(6,'SEO','seo',13,'2014-04-30 16:40:45','2014-04-30 16:44:25','ba2a4e31-55a0-45ff-a73a-c0b32905670c');

/*!40000 ALTER TABLE `craft_globalsets` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table craft_info
# ------------------------------------------------------------

DROP TABLE IF EXISTS `craft_info`;

CREATE TABLE `craft_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `version` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `build` int(11) unsigned NOT NULL,
  `schemaVersion` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `releaseDate` datetime NOT NULL,
  `edition` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `siteName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `siteUrl` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `timezone` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `on` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `maintenance` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `track` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `craft_info` WRITE;
/*!40000 ALTER TABLE `craft_info` DISABLE KEYS */;

INSERT INTO `craft_info` (`id`, `version`, `build`, `schemaVersion`, `releaseDate`, `edition`, `siteName`, `siteUrl`, `timezone`, `on`, `maintenance`, `track`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(1,'2.0',2536,'2.0.0','2014-04-18 23:10:16',1,'{siteName}','http://craft.dev:8080/','America/Chicago',1,0,'stable','2014-04-30 13:25:20','2014-04-30 18:20:53','7ba1069c-3ac1-456f-8a6d-a736584d00fe');

/*!40000 ALTER TABLE `craft_info` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table craft_locales
# ------------------------------------------------------------

DROP TABLE IF EXISTS `craft_locales`;

CREATE TABLE `craft_locales` (
  `locale` char(12) COLLATE utf8_unicode_ci NOT NULL,
  `sortOrder` tinyint(4) DEFAULT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`locale`),
  KEY `craft_locales_sortOrder_idx` (`sortOrder`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `craft_locales` WRITE;
/*!40000 ALTER TABLE `craft_locales` DISABLE KEYS */;

INSERT INTO `craft_locales` (`locale`, `sortOrder`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	('en_us',1,'2014-04-30 13:25:20','2014-04-30 13:25:20','1b70e5af-400e-49a9-a868-63de021184c0');

/*!40000 ALTER TABLE `craft_locales` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table craft_matrixblocks
# ------------------------------------------------------------

DROP TABLE IF EXISTS `craft_matrixblocks`;

CREATE TABLE `craft_matrixblocks` (
  `id` int(11) NOT NULL,
  `ownerId` int(11) NOT NULL,
  `fieldId` int(11) NOT NULL,
  `typeId` int(11) DEFAULT NULL,
  `ownerLocale` char(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sortOrder` tinyint(4) DEFAULT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `craft_matrixblocks_ownerId_idx` (`ownerId`),
  KEY `craft_matrixblocks_fieldId_idx` (`fieldId`),
  KEY `craft_matrixblocks_typeId_idx` (`typeId`),
  KEY `craft_matrixblocks_sortOrder_idx` (`sortOrder`),
  KEY `craft_matrixblocks_ownerLocale_fk` (`ownerLocale`),
  CONSTRAINT `craft_matrixblocks_typeId_fk` FOREIGN KEY (`typeId`) REFERENCES `craft_matrixblocktypes` (`id`) ON DELETE CASCADE,
  CONSTRAINT `craft_matrixblocks_fieldId_fk` FOREIGN KEY (`fieldId`) REFERENCES `craft_fields` (`id`) ON DELETE CASCADE,
  CONSTRAINT `craft_matrixblocks_id_fk` FOREIGN KEY (`id`) REFERENCES `craft_elements` (`id`) ON DELETE CASCADE,
  CONSTRAINT `craft_matrixblocks_ownerId_fk` FOREIGN KEY (`ownerId`) REFERENCES `craft_elements` (`id`) ON DELETE CASCADE,
  CONSTRAINT `craft_matrixblocks_ownerLocale_fk` FOREIGN KEY (`ownerLocale`) REFERENCES `craft_locales` (`locale`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table craft_matrixblocktypes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `craft_matrixblocktypes`;

CREATE TABLE `craft_matrixblocktypes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fieldId` int(11) NOT NULL,
  `fieldLayoutId` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `handle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sortOrder` tinyint(4) DEFAULT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `craft_matrixblocktypes_name_fieldId_unq_idx` (`name`,`fieldId`),
  UNIQUE KEY `craft_matrixblocktypes_handle_fieldId_unq_idx` (`handle`,`fieldId`),
  KEY `craft_matrixblocktypes_fieldId_fk` (`fieldId`),
  KEY `craft_matrixblocktypes_fieldLayoutId_fk` (`fieldLayoutId`),
  CONSTRAINT `craft_matrixblocktypes_fieldLayoutId_fk` FOREIGN KEY (`fieldLayoutId`) REFERENCES `craft_fieldlayouts` (`id`) ON DELETE SET NULL,
  CONSTRAINT `craft_matrixblocktypes_fieldId_fk` FOREIGN KEY (`fieldId`) REFERENCES `craft_fields` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `craft_matrixblocktypes` WRITE;
/*!40000 ALTER TABLE `craft_matrixblocktypes` DISABLE KEYS */;

INSERT INTO `craft_matrixblocktypes` (`id`, `fieldId`, `fieldLayoutId`, `name`, `handle`, `sortOrder`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(1,4,16,'Generic','generic',1,'2014-04-30 14:01:34','2014-04-30 20:24:18','fb82f48b-96ad-4a27-a60c-6a2e8029d2d5');

/*!40000 ALTER TABLE `craft_matrixblocktypes` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table craft_matrixcontent_sections
# ------------------------------------------------------------

DROP TABLE IF EXISTS `craft_matrixcontent_sections`;

CREATE TABLE `craft_matrixcontent_sections` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `elementId` int(11) NOT NULL,
  `locale` char(12) COLLATE utf8_unicode_ci NOT NULL,
  `field_generic_header` text COLLATE utf8_unicode_ci,
  `field_generic_body` text COLLATE utf8_unicode_ci,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `craft_matrixcontent_sections_elementId_locale_unq_idx` (`elementId`,`locale`),
  KEY `craft_matrixcontent_sections_locale_fk` (`locale`),
  CONSTRAINT `craft_matrixcontent_sections_elementId_fk` FOREIGN KEY (`elementId`) REFERENCES `craft_elements` (`id`) ON DELETE CASCADE,
  CONSTRAINT `craft_matrixcontent_sections_locale_fk` FOREIGN KEY (`locale`) REFERENCES `craft_locales` (`locale`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table craft_migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `craft_migrations`;

CREATE TABLE `craft_migrations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pluginId` int(11) DEFAULT NULL,
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `applyTime` datetime NOT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `craft_migrations_version_unq_idx` (`version`),
  KEY `craft_migrations_pluginId_fk` (`pluginId`),
  CONSTRAINT `craft_migrations_pluginId_fk` FOREIGN KEY (`pluginId`) REFERENCES `craft_plugins` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `craft_migrations` WRITE;
/*!40000 ALTER TABLE `craft_migrations` DISABLE KEYS */;

INSERT INTO `craft_migrations` (`id`, `pluginId`, `version`, `applyTime`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(1,NULL,'m000000_000000_base','2014-04-30 13:25:20','2014-04-30 13:25:20','2014-04-30 13:25:20','4cf3ab08-bcb5-435a-9077-115fed58949f');

INSERT INTO `craft_migrations` (`id`, `pluginId`, `version`, `applyTime`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(2,NULL,'m131203_000000_allow_orphan_assets','2014-04-30 13:25:20','2014-04-30 13:25:20','2014-04-30 13:25:20','32067353-e125-4b76-b4f8-200bedf6d71d');

INSERT INTO `craft_migrations` (`id`, `pluginId`, `version`, `applyTime`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(3,NULL,'m131212_000001_add_missing_fk_to_emailmessages','2014-04-30 13:25:20','2014-04-30 13:25:20','2014-04-30 13:25:20','281fd228-efa4-4a45-8114-90ba5aec746b');

INSERT INTO `craft_migrations` (`id`, `pluginId`, `version`, `applyTime`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(4,NULL,'m140123_000000_update_widget_sort_orders','2014-04-30 13:25:20','2014-04-30 13:25:20','2014-04-30 13:25:20','58997a61-5d27-4809-990e-5e4072c0bd4c');

INSERT INTO `craft_migrations` (`id`, `pluginId`, `version`, `applyTime`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(5,NULL,'m140212_000000_clean_up_structures','2014-04-30 13:25:20','2014-04-30 13:25:20','2014-04-30 13:25:20','e831f736-2f5c-4f61-8f3c-e981a007a628');

INSERT INTO `craft_migrations` (`id`, `pluginId`, `version`, `applyTime`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(6,NULL,'m140217_000000_add_missing_indexes','2014-04-30 13:25:20','2014-04-30 13:25:20','2014-04-30 13:25:20','9b5a756f-8283-4ee2-a427-6a1e5eddfc74');

INSERT INTO `craft_migrations` (`id`, `pluginId`, `version`, `applyTime`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(7,NULL,'m140223_000000_add_missing_element_rows','2014-04-30 13:25:20','2014-04-30 13:25:20','2014-04-30 13:25:20','43cffffc-3774-4b20-baa8-007f5e956e15');

INSERT INTO `craft_migrations` (`id`, `pluginId`, `version`, `applyTime`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(8,NULL,'m140325_000000_fix_matrix_settings','2014-04-30 13:25:20','2014-04-30 13:25:20','2014-04-30 13:25:20','c4ce9284-a588-4d34-8076-c40ebaa1a49d');

INSERT INTO `craft_migrations` (`id`, `pluginId`, `version`, `applyTime`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(9,NULL,'m140401_000000_assignUserPermissions_permission','2014-04-30 13:25:20','2014-04-30 13:25:20','2014-04-30 13:25:20','83703228-9bae-4a28-b429-dd92fb13505b');

INSERT INTO `craft_migrations` (`id`, `pluginId`, `version`, `applyTime`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(10,NULL,'m140401_000000_delete_the_deleted_files','2014-04-30 13:25:20','2014-04-30 13:25:20','2014-04-30 13:25:20','a16d7380-4a74-439d-9dba-4e1d79fc9ff6');

INSERT INTO `craft_migrations` (`id`, `pluginId`, `version`, `applyTime`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(11,NULL,'m140401_000001_structures','2014-04-30 13:25:20','2014-04-30 13:25:20','2014-04-30 13:25:20','9f679711-20ab-49ee-9e9f-061e70da7b41');

INSERT INTO `craft_migrations` (`id`, `pluginId`, `version`, `applyTime`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(12,NULL,'m140401_000002_elements_i18n_tweaks','2014-04-30 13:25:20','2014-04-30 13:25:20','2014-04-30 13:25:20','0b808d99-ab9e-4a91-bbcc-2249789d068a');

INSERT INTO `craft_migrations` (`id`, `pluginId`, `version`, `applyTime`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(13,NULL,'m140401_000003_tag_groups','2014-04-30 13:25:20','2014-04-30 13:25:20','2014-04-30 13:25:20','5e0bebb4-2e87-44ec-8cff-da26b8ec479e');

INSERT INTO `craft_migrations` (`id`, `pluginId`, `version`, `applyTime`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(14,NULL,'m140401_000004_add_unverifiedemail_column_to_users','2014-04-30 13:25:20','2014-04-30 13:25:20','2014-04-30 13:25:20','05bd8195-dab0-4f60-a3fd-2e624f6d2098');

INSERT INTO `craft_migrations` (`id`, `pluginId`, `version`, `applyTime`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(15,NULL,'m140401_000005_translatable_matrix_fields','2014-04-30 13:25:20','2014-04-30 13:25:20','2014-04-30 13:25:20','460322e2-bb5a-4ca6-8cd5-ce76fbab0d9a');

INSERT INTO `craft_migrations` (`id`, `pluginId`, `version`, `applyTime`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(16,NULL,'m140401_000006_translatable_relation_fields','2014-04-30 13:25:20','2014-04-30 13:25:20','2014-04-30 13:25:20','6cb2a631-acac-4eef-a10b-9af9ef2c8a8c');

INSERT INTO `craft_migrations` (`id`, `pluginId`, `version`, `applyTime`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(17,NULL,'m140401_000007_add_enabledbydefault_column_to_sections_i18n','2014-04-30 13:25:20','2014-04-30 13:25:20','2014-04-30 13:25:20','9f0c0ff7-7b23-4bb9-b952-3bf5274b1141');

INSERT INTO `craft_migrations` (`id`, `pluginId`, `version`, `applyTime`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(18,NULL,'m140401_000008_fullpath_to_path','2014-04-30 13:25:20','2014-04-30 13:25:20','2014-04-30 13:25:20','6c55b8bb-ef9f-481b-8c4f-376fca9df41e');

INSERT INTO `craft_migrations` (`id`, `pluginId`, `version`, `applyTime`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(19,NULL,'m140401_000009_asset_field_layouts','2014-04-30 13:25:20','2014-04-30 13:25:20','2014-04-30 13:25:20','6e6d612f-e553-4f0d-a1d3-33f08f718399');

INSERT INTO `craft_migrations` (`id`, `pluginId`, `version`, `applyTime`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(20,NULL,'m140401_000010_no_section_default_author','2014-04-30 13:25:20','2014-04-30 13:25:20','2014-04-30 13:25:20','78382e56-f237-4603-af3f-b4883440bb2a');

INSERT INTO `craft_migrations` (`id`, `pluginId`, `version`, `applyTime`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(21,NULL,'m140401_000011_categories','2014-04-30 13:25:20','2014-04-30 13:25:20','2014-04-30 13:25:20','250df533-4a2e-4bf0-99ab-5e8f68487982');

INSERT INTO `craft_migrations` (`id`, `pluginId`, `version`, `applyTime`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(22,NULL,'m140401_000012_templatecaches','2014-04-30 13:25:20','2014-04-30 13:25:20','2014-04-30 13:25:20','f80c1ee8-2ca4-457e-9497-13854846eb67');

INSERT INTO `craft_migrations` (`id`, `pluginId`, `version`, `applyTime`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(23,NULL,'m140401_000013_allow_temp_source_transforms','2014-04-30 13:25:20','2014-04-30 13:25:20','2014-04-30 13:25:20','d43acb91-f59c-4dc0-89bc-33de647b522e');

INSERT INTO `craft_migrations` (`id`, `pluginId`, `version`, `applyTime`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(24,NULL,'m140401_000014_entry_title_formats','2014-04-30 13:25:20','2014-04-30 13:25:20','2014-04-30 13:25:20','e2945d6d-8e45-4bf7-8b8d-877894d6533f');

INSERT INTO `craft_migrations` (`id`, `pluginId`, `version`, `applyTime`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(25,NULL,'m140401_000015_tasks','2014-04-30 13:25:20','2014-04-30 13:25:20','2014-04-30 13:25:20','7f7b7c3d-cfc6-4b0f-9f24-1f583deaa5a8');

INSERT INTO `craft_migrations` (`id`, `pluginId`, `version`, `applyTime`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(26,NULL,'m140401_000016_varchar_classes','2014-04-30 13:25:20','2014-04-30 13:25:20','2014-04-30 13:25:20','b17f94a7-ab8f-45e3-b1b2-65403042a96d');

INSERT INTO `craft_migrations` (`id`, `pluginId`, `version`, `applyTime`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(27,NULL,'m140401_000017_add_transform_quality','2014-04-30 13:25:20','2014-04-30 13:25:20','2014-04-30 13:25:20','a919041f-6e36-45f8-9e40-b662328f9ae4');

INSERT INTO `craft_migrations` (`id`, `pluginId`, `version`, `applyTime`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(28,NULL,'m140401_000018_locale_routes','2014-04-30 13:25:20','2014-04-30 13:25:20','2014-04-30 13:25:20','ba6ac6d5-1e5c-4a3d-be2f-46ba9da8d5ab');

INSERT INTO `craft_migrations` (`id`, `pluginId`, `version`, `applyTime`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(29,NULL,'m140401_000019_editions','2014-04-30 13:25:20','2014-04-30 13:25:20','2014-04-30 13:25:20','b058a9b7-3460-4864-8428-9fae4fa5aa1d');

INSERT INTO `craft_migrations` (`id`, `pluginId`, `version`, `applyTime`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(30,NULL,'m140401_000019_rackspace_auth_api','2014-04-30 13:25:20','2014-04-30 13:25:20','2014-04-30 13:25:20','ca6c0fe4-2425-4e76-8b7c-5709fe5fa1ad');

INSERT INTO `craft_migrations` (`id`, `pluginId`, `version`, `applyTime`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(31,NULL,'m140401_000020_deprecationerrors_table','2014-04-30 13:25:20','2014-04-30 13:25:20','2014-04-30 13:25:20','b7bf1056-7942-4e82-8375-100017ffddc5');

INSERT INTO `craft_migrations` (`id`, `pluginId`, `version`, `applyTime`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(32,NULL,'m140401_000021_client_user','2014-04-30 13:25:20','2014-04-30 13:25:20','2014-04-30 13:25:20','98af7a39-8ebf-42e6-8248-6afbbadbc314');

INSERT INTO `craft_migrations` (`id`, `pluginId`, `version`, `applyTime`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(33,NULL,'m140401_100000_resave_elements','2014-04-30 13:25:20','2014-04-30 13:25:20','2014-04-30 13:25:20','5ee3ea61-bef3-4947-b91b-17d7609ad32a');

INSERT INTO `craft_migrations` (`id`, `pluginId`, `version`, `applyTime`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(34,NULL,'m140401_100002_delete_compiled_templates','2014-04-30 13:25:20','2014-04-30 13:25:20','2014-04-30 13:25:20','bec9919a-55e2-4dfc-b35d-49d9a296c9ef');

INSERT INTO `craft_migrations` (`id`, `pluginId`, `version`, `applyTime`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(35,NULL,'m140403_000000_allow_orphan_assets_again','2014-04-30 13:25:20','2014-04-30 13:25:20','2014-04-30 13:25:20','2c6759c5-c238-4afc-b8c9-5101351533b6');

/*!40000 ALTER TABLE `craft_migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table craft_plugins
# ------------------------------------------------------------

DROP TABLE IF EXISTS `craft_plugins`;

CREATE TABLE `craft_plugins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `version` char(15) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `settings` text COLLATE utf8_unicode_ci,
  `installDate` datetime NOT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table craft_rackspaceaccess
# ------------------------------------------------------------

DROP TABLE IF EXISTS `craft_rackspaceaccess`;

CREATE TABLE `craft_rackspaceaccess` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `connectionKey` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `storageUrl` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cdnUrl` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `craft_rackspaceaccess_connectionKey_unq_idx` (`connectionKey`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table craft_relations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `craft_relations`;

CREATE TABLE `craft_relations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fieldId` int(11) NOT NULL,
  `sourceId` int(11) NOT NULL,
  `sourceLocale` char(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `targetId` int(11) NOT NULL,
  `sortOrder` tinyint(4) DEFAULT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `craft_relations_fieldId_sourceId_sourceLocale_targetId_unq_idx` (`fieldId`,`sourceId`,`sourceLocale`,`targetId`),
  KEY `craft_relations_sourceId_fk` (`sourceId`),
  KEY `craft_relations_sourceLocale_fk` (`sourceLocale`),
  KEY `craft_relations_targetId_fk` (`targetId`),
  CONSTRAINT `craft_relations_targetId_fk` FOREIGN KEY (`targetId`) REFERENCES `craft_elements` (`id`) ON DELETE CASCADE,
  CONSTRAINT `craft_relations_fieldId_fk` FOREIGN KEY (`fieldId`) REFERENCES `craft_fields` (`id`) ON DELETE CASCADE,
  CONSTRAINT `craft_relations_sourceId_fk` FOREIGN KEY (`sourceId`) REFERENCES `craft_elements` (`id`) ON DELETE CASCADE,
  CONSTRAINT `craft_relations_sourceLocale_fk` FOREIGN KEY (`sourceLocale`) REFERENCES `craft_locales` (`locale`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table craft_routes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `craft_routes`;

CREATE TABLE `craft_routes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `locale` char(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `urlParts` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `urlPattern` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `template` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sortOrder` tinyint(4) DEFAULT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `craft_routes_urlPattern_unq_idx` (`urlPattern`),
  KEY `craft_routes_locale_idx` (`locale`),
  CONSTRAINT `craft_routes_locale_fk` FOREIGN KEY (`locale`) REFERENCES `craft_locales` (`locale`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table craft_searchindex
# ------------------------------------------------------------

DROP TABLE IF EXISTS `craft_searchindex`;

CREATE TABLE `craft_searchindex` (
  `elementId` int(11) NOT NULL,
  `attribute` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `fieldId` int(11) NOT NULL,
  `locale` char(12) COLLATE utf8_unicode_ci NOT NULL,
  `keywords` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`elementId`,`attribute`,`fieldId`,`locale`),
  FULLTEXT KEY `craft_searchindex_keywords_idx` (`keywords`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `craft_searchindex` WRITE;
/*!40000 ALTER TABLE `craft_searchindex` DISABLE KEYS */;

INSERT INTO `craft_searchindex` (`elementId`, `attribute`, `fieldId`, `locale`, `keywords`)
VALUES
	(1,'username',0,'en_us',' admin ');

INSERT INTO `craft_searchindex` (`elementId`, `attribute`, `fieldId`, `locale`, `keywords`)
VALUES
	(1,'firstname',0,'en_us','');

INSERT INTO `craft_searchindex` (`elementId`, `attribute`, `fieldId`, `locale`, `keywords`)
VALUES
	(1,'lastname',0,'en_us','');

INSERT INTO `craft_searchindex` (`elementId`, `attribute`, `fieldId`, `locale`, `keywords`)
VALUES
	(1,'fullname',0,'en_us','');

INSERT INTO `craft_searchindex` (`elementId`, `attribute`, `fieldId`, `locale`, `keywords`)
VALUES
	(1,'email',0,'en_us',' root localhost local ');

INSERT INTO `craft_searchindex` (`elementId`, `attribute`, `fieldId`, `locale`, `keywords`)
VALUES
	(1,'slug',0,'en_us','');

INSERT INTO `craft_searchindex` (`elementId`, `attribute`, `fieldId`, `locale`, `keywords`)
VALUES
	(2,'field',1,'en_us',' welcome to craft dev ');

INSERT INTO `craft_searchindex` (`elementId`, `attribute`, `fieldId`, `locale`, `keywords`)
VALUES
	(2,'field',2,'en_us',' it s true this site doesn t have a whole lot of content yet but don t worry our web developers have just installed the cms and they re setting things up for the content editors this very moment soon craft dev will be an oasis of fresh perspectives sharp analyses and astute opinions that will keep you coming back again and again ');

INSERT INTO `craft_searchindex` (`elementId`, `attribute`, `fieldId`, `locale`, `keywords`)
VALUES
	(2,'slug',0,'en_us',' homepage ');

INSERT INTO `craft_searchindex` (`elementId`, `attribute`, `fieldId`, `locale`, `keywords`)
VALUES
	(2,'title',0,'en_us',' homepage ');

INSERT INTO `craft_searchindex` (`elementId`, `attribute`, `fieldId`, `locale`, `keywords`)
VALUES
	(3,'field',2,'en_us',' craft is the cms that s powering craft dev it s beautiful powerful flexible and easy to use and it s made by pixel tonic we can t wait to dive in and see what it s capable of this is even more captivating content which you couldn t see on the news index page because it was entered after a page break and the news index template only likes to show the content on the first page craft a nice alternative to word if you re making a website ');

INSERT INTO `craft_searchindex` (`elementId`, `attribute`, `fieldId`, `locale`, `keywords`)
VALUES
	(3,'field',3,'en_us','');

INSERT INTO `craft_searchindex` (`elementId`, `attribute`, `fieldId`, `locale`, `keywords`)
VALUES
	(3,'slug',0,'en_us','');

INSERT INTO `craft_searchindex` (`elementId`, `attribute`, `fieldId`, `locale`, `keywords`)
VALUES
	(3,'title',0,'en_us',' we just installed craft ');

INSERT INTO `craft_searchindex` (`elementId`, `attribute`, `fieldId`, `locale`, `keywords`)
VALUES
	(4,'field',4,'en_us',' it contains generic text this is a generic header ');

INSERT INTO `craft_searchindex` (`elementId`, `attribute`, `fieldId`, `locale`, `keywords`)
VALUES
	(4,'slug',0,'en_us',' first level page ');

INSERT INTO `craft_searchindex` (`elementId`, `attribute`, `fieldId`, `locale`, `keywords`)
VALUES
	(4,'title',0,'en_us',' first level page ');

INSERT INTO `craft_searchindex` (`elementId`, `attribute`, `fieldId`, `locale`, `keywords`)
VALUES
	(5,'field',4,'en_us',' it contains generic text this is a generic header ');

INSERT INTO `craft_searchindex` (`elementId`, `attribute`, `fieldId`, `locale`, `keywords`)
VALUES
	(5,'slug',0,'en_us',' second level page ');

INSERT INTO `craft_searchindex` (`elementId`, `attribute`, `fieldId`, `locale`, `keywords`)
VALUES
	(5,'title',0,'en_us',' second level page ');

INSERT INTO `craft_searchindex` (`elementId`, `attribute`, `fieldId`, `locale`, `keywords`)
VALUES
	(6,'field',2,'en_us','');

INSERT INTO `craft_searchindex` (`elementId`, `attribute`, `fieldId`, `locale`, `keywords`)
VALUES
	(6,'slug',0,'en_us','');

INSERT INTO `craft_searchindex` (`elementId`, `attribute`, `fieldId`, `locale`, `keywords`)
VALUES
	(6,'field',10,'en_us',' default title ');

INSERT INTO `craft_searchindex` (`elementId`, `attribute`, `fieldId`, `locale`, `keywords`)
VALUES
	(6,'field',9,'en_us',' please update the default description ');

INSERT INTO `craft_searchindex` (`elementId`, `attribute`, `fieldId`, `locale`, `keywords`)
VALUES
	(2,'field',4,'en_us',' this is the first section on the home page first section dark background ');

INSERT INTO `craft_searchindex` (`elementId`, `attribute`, `fieldId`, `locale`, `keywords`)
VALUES
	(2,'field',10,'en_us','');

INSERT INTO `craft_searchindex` (`elementId`, `attribute`, `fieldId`, `locale`, `keywords`)
VALUES
	(2,'field',9,'en_us','');

INSERT INTO `craft_searchindex` (`elementId`, `attribute`, `fieldId`, `locale`, `keywords`)
VALUES
	(7,'field',5,'en_us',' first section ');

INSERT INTO `craft_searchindex` (`elementId`, `attribute`, `fieldId`, `locale`, `keywords`)
VALUES
	(7,'field',6,'en_us',' h2 ');

INSERT INTO `craft_searchindex` (`elementId`, `attribute`, `fieldId`, `locale`, `keywords`)
VALUES
	(7,'field',7,'en_us',' this is the first section on the home page ');

INSERT INTO `craft_searchindex` (`elementId`, `attribute`, `fieldId`, `locale`, `keywords`)
VALUES
	(7,'field',8,'en_us','');

INSERT INTO `craft_searchindex` (`elementId`, `attribute`, `fieldId`, `locale`, `keywords`)
VALUES
	(7,'slug',0,'en_us','');

INSERT INTO `craft_searchindex` (`elementId`, `attribute`, `fieldId`, `locale`, `keywords`)
VALUES
	(8,'field',11,'en_us',' dark ');

INSERT INTO `craft_searchindex` (`elementId`, `attribute`, `fieldId`, `locale`, `keywords`)
VALUES
	(8,'slug',0,'en_us',' dark background ');

INSERT INTO `craft_searchindex` (`elementId`, `attribute`, `fieldId`, `locale`, `keywords`)
VALUES
	(8,'title',0,'en_us',' dark background ');

INSERT INTO `craft_searchindex` (`elementId`, `attribute`, `fieldId`, `locale`, `keywords`)
VALUES
	(4,'field',10,'en_us','');

INSERT INTO `craft_searchindex` (`elementId`, `attribute`, `fieldId`, `locale`, `keywords`)
VALUES
	(4,'field',9,'en_us','');

INSERT INTO `craft_searchindex` (`elementId`, `attribute`, `fieldId`, `locale`, `keywords`)
VALUES
	(5,'field',10,'en_us','');

INSERT INTO `craft_searchindex` (`elementId`, `attribute`, `fieldId`, `locale`, `keywords`)
VALUES
	(5,'field',9,'en_us','');

INSERT INTO `craft_searchindex` (`elementId`, `attribute`, `fieldId`, `locale`, `keywords`)
VALUES
	(9,'field',5,'en_us',' this is a generic header ');

INSERT INTO `craft_searchindex` (`elementId`, `attribute`, `fieldId`, `locale`, `keywords`)
VALUES
	(9,'field',7,'en_us',' it contains generic text ');

INSERT INTO `craft_searchindex` (`elementId`, `attribute`, `fieldId`, `locale`, `keywords`)
VALUES
	(9,'field',8,'en_us','');

INSERT INTO `craft_searchindex` (`elementId`, `attribute`, `fieldId`, `locale`, `keywords`)
VALUES
	(9,'slug',0,'en_us','');

INSERT INTO `craft_searchindex` (`elementId`, `attribute`, `fieldId`, `locale`, `keywords`)
VALUES
	(10,'field',5,'en_us',' this is a generic header ');

INSERT INTO `craft_searchindex` (`elementId`, `attribute`, `fieldId`, `locale`, `keywords`)
VALUES
	(10,'field',7,'en_us',' it contains generic text ');

INSERT INTO `craft_searchindex` (`elementId`, `attribute`, `fieldId`, `locale`, `keywords`)
VALUES
	(10,'field',8,'en_us','');

INSERT INTO `craft_searchindex` (`elementId`, `attribute`, `fieldId`, `locale`, `keywords`)
VALUES
	(10,'slug',0,'en_us','');

INSERT INTO `craft_searchindex` (`elementId`, `attribute`, `fieldId`, `locale`, `keywords`)
VALUES
	(11,'filename',0,'en_us',' keith headshot jpg ');

INSERT INTO `craft_searchindex` (`elementId`, `attribute`, `fieldId`, `locale`, `keywords`)
VALUES
	(11,'extension',0,'en_us',' jpg ');

INSERT INTO `craft_searchindex` (`elementId`, `attribute`, `fieldId`, `locale`, `keywords`)
VALUES
	(11,'kind',0,'en_us',' image ');

INSERT INTO `craft_searchindex` (`elementId`, `attribute`, `fieldId`, `locale`, `keywords`)
VALUES
	(11,'slug',0,'en_us','');

INSERT INTO `craft_searchindex` (`elementId`, `attribute`, `fieldId`, `locale`, `keywords`)
VALUES
	(11,'title',0,'en_us',' keith headshot ');

/*!40000 ALTER TABLE `craft_searchindex` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table craft_sections
# ------------------------------------------------------------

DROP TABLE IF EXISTS `craft_sections`;

CREATE TABLE `craft_sections` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `structureId` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `handle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` enum('single','channel','structure') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'channel',
  `hasUrls` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `template` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `craft_sections_name_unq_idx` (`name`),
  UNIQUE KEY `craft_sections_handle_unq_idx` (`handle`),
  KEY `craft_sections_structureId_fk` (`structureId`),
  CONSTRAINT `craft_sections_structureId_fk` FOREIGN KEY (`structureId`) REFERENCES `craft_structures` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `craft_sections` WRITE;
/*!40000 ALTER TABLE `craft_sections` DISABLE KEYS */;

INSERT INTO `craft_sections` (`id`, `structureId`, `name`, `handle`, `type`, `hasUrls`, `template`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(1,NULL,'Homepage','homepage','single',1,'index','2014-04-30 13:25:22','2014-04-30 13:25:22','e190c4d2-6433-4b52-96ab-c22bf03f23d2');

INSERT INTO `craft_sections` (`id`, `structureId`, `name`, `handle`, `type`, `hasUrls`, `template`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(2,NULL,'News','news','channel',1,'news/_entry','2014-04-30 13:25:22','2014-04-30 13:25:22','3fef73e5-f377-4650-baa7-8f7018616719');

INSERT INTO `craft_sections` (`id`, `structureId`, `name`, `handle`, `type`, `hasUrls`, `template`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(3,1,'Pages','pages','structure',1,'index','2014-04-30 13:52:08','2014-05-01 17:27:46','e14f8358-28d7-4a62-b60f-f2cc8f40a9e4');

INSERT INTO `craft_sections` (`id`, `structureId`, `name`, `handle`, `type`, `hasUrls`, `template`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(4,NULL,'Section Modifiers','modifiers','channel',0,NULL,'2014-04-30 14:00:31','2014-04-30 14:00:31','3759cc93-3c36-4d25-bdba-8420425f2b7b');

/*!40000 ALTER TABLE `craft_sections` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table craft_sections_i18n
# ------------------------------------------------------------

DROP TABLE IF EXISTS `craft_sections_i18n`;

CREATE TABLE `craft_sections_i18n` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sectionId` int(11) NOT NULL,
  `locale` char(12) COLLATE utf8_unicode_ci NOT NULL,
  `enabledByDefault` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `urlFormat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nestedUrlFormat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `craft_sections_i18n_sectionId_locale_unq_idx` (`sectionId`,`locale`),
  KEY `craft_sections_i18n_locale_fk` (`locale`),
  CONSTRAINT `craft_sections_i18n_locale_fk` FOREIGN KEY (`locale`) REFERENCES `craft_locales` (`locale`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `craft_sections_i18n_sectionId_fk` FOREIGN KEY (`sectionId`) REFERENCES `craft_sections` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `craft_sections_i18n` WRITE;
/*!40000 ALTER TABLE `craft_sections_i18n` DISABLE KEYS */;

INSERT INTO `craft_sections_i18n` (`id`, `sectionId`, `locale`, `enabledByDefault`, `urlFormat`, `nestedUrlFormat`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(1,1,'en_us',1,'__home__',NULL,'2014-04-30 13:25:22','2014-04-30 13:25:22','e321a68d-45c2-4567-ade9-145e157aac63');

INSERT INTO `craft_sections_i18n` (`id`, `sectionId`, `locale`, `enabledByDefault`, `urlFormat`, `nestedUrlFormat`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(2,2,'en_us',1,'news/{postDate.year}/{slug}',NULL,'2014-04-30 13:25:22','2014-04-30 13:25:22','23f5e730-ae7a-47cd-8fd0-2970635d2d06');

INSERT INTO `craft_sections_i18n` (`id`, `sectionId`, `locale`, `enabledByDefault`, `urlFormat`, `nestedUrlFormat`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(3,3,'en_us',0,'{slug}','{parent.uri}/{slug}','2014-04-30 13:52:08','2014-04-30 13:52:08','02ed712e-fe6f-4801-8a7f-935ff07d8585');

INSERT INTO `craft_sections_i18n` (`id`, `sectionId`, `locale`, `enabledByDefault`, `urlFormat`, `nestedUrlFormat`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(4,4,'en_us',0,NULL,NULL,'2014-04-30 14:00:31','2014-04-30 14:00:31','bb17ab16-3001-4244-86ce-7beb14803dae');

/*!40000 ALTER TABLE `craft_sections_i18n` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table craft_sessions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `craft_sessions`;

CREATE TABLE `craft_sessions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `token` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `craft_sessions_uid_idx` (`uid`),
  KEY `craft_sessions_token_idx` (`token`),
  KEY `craft_sessions_dateUpdated_idx` (`dateUpdated`),
  KEY `craft_sessions_userId_fk` (`userId`),
  CONSTRAINT `craft_sessions_userId_fk` FOREIGN KEY (`userId`) REFERENCES `craft_users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table craft_shunnedmessages
# ------------------------------------------------------------

DROP TABLE IF EXISTS `craft_shunnedmessages`;

CREATE TABLE `craft_shunnedmessages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `message` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `expiryDate` datetime DEFAULT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `craft_shunnedmessages_userId_message_unq_idx` (`userId`,`message`),
  CONSTRAINT `craft_shunnedmessages_userId_fk` FOREIGN KEY (`userId`) REFERENCES `craft_users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table craft_structureelements
# ------------------------------------------------------------

DROP TABLE IF EXISTS `craft_structureelements`;

CREATE TABLE `craft_structureelements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `structureId` int(11) NOT NULL,
  `elementId` int(11) DEFAULT NULL,
  `root` int(11) unsigned DEFAULT NULL,
  `lft` int(11) unsigned NOT NULL,
  `rgt` int(11) unsigned NOT NULL,
  `level` smallint(6) unsigned NOT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `craft_structureelements_structureId_elementId_unq_idx` (`structureId`,`elementId`),
  KEY `craft_structureelements_root_idx` (`root`),
  KEY `craft_structureelements_lft_idx` (`lft`),
  KEY `craft_structureelements_rgt_idx` (`rgt`),
  KEY `craft_structureelements_level_idx` (`level`),
  KEY `craft_structureelements_elementId_fk` (`elementId`),
  CONSTRAINT `craft_structureelements_elementId_fk` FOREIGN KEY (`elementId`) REFERENCES `craft_elements` (`id`) ON DELETE CASCADE,
  CONSTRAINT `craft_structureelements_structureId_fk` FOREIGN KEY (`structureId`) REFERENCES `craft_structures` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `craft_structureelements` WRITE;
/*!40000 ALTER TABLE `craft_structureelements` DISABLE KEYS */;

INSERT INTO `craft_structureelements` (`id`, `structureId`, `elementId`, `root`, `lft`, `rgt`, `level`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(1,1,NULL,1,1,6,0,'2014-04-30 14:08:00','2014-04-30 14:08:00','fcac055c-99e3-4e91-b5d9-da0db4a3c348');

INSERT INTO `craft_structureelements` (`id`, `structureId`, `elementId`, `root`, `lft`, `rgt`, `level`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(2,1,4,1,2,5,1,'2014-04-30 14:08:00','2014-04-30 14:08:00','55115da3-a185-4f81-b22c-c1814c16942e');

INSERT INTO `craft_structureelements` (`id`, `structureId`, `elementId`, `root`, `lft`, `rgt`, `level`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(3,1,5,1,3,4,2,'2014-04-30 14:08:13','2014-04-30 14:08:13','97fe0665-6713-4a21-9e4a-e9e2ebc4f2cf');

/*!40000 ALTER TABLE `craft_structureelements` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table craft_structures
# ------------------------------------------------------------

DROP TABLE IF EXISTS `craft_structures`;

CREATE TABLE `craft_structures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `maxLevels` smallint(6) unsigned DEFAULT NULL,
  `movePermission` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `craft_structures` WRITE;
/*!40000 ALTER TABLE `craft_structures` DISABLE KEYS */;

INSERT INTO `craft_structures` (`id`, `maxLevels`, `movePermission`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(1,NULL,NULL,'2014-04-30 13:52:08','2014-05-01 17:27:46','35073351-8f63-4a15-bd14-b731f7d14ad8');

/*!40000 ALTER TABLE `craft_structures` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table craft_systemsettings
# ------------------------------------------------------------

DROP TABLE IF EXISTS `craft_systemsettings`;

CREATE TABLE `craft_systemsettings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `settings` text COLLATE utf8_unicode_ci,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `craft_systemsettings_category_unq_idx` (`category`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `craft_systemsettings` WRITE;
/*!40000 ALTER TABLE `craft_systemsettings` DISABLE KEYS */;

INSERT INTO `craft_systemsettings` (`id`, `category`, `settings`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(1,'email','{\"protocol\":\"php\",\"emailAddress\":\"root@localhost.local\",\"senderName\":\"Craft\"}','2014-04-30 13:25:22','2014-04-30 13:25:22','90b58f92-bee2-4722-b2a5-b8537ed3444c');

/*!40000 ALTER TABLE `craft_systemsettings` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table craft_taggroups
# ------------------------------------------------------------

DROP TABLE IF EXISTS `craft_taggroups`;

CREATE TABLE `craft_taggroups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `handle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fieldLayoutId` int(10) DEFAULT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `craft_taggroups_name_unq_idx` (`name`),
  UNIQUE KEY `craft_taggroups_handle_unq_idx` (`handle`),
  KEY `craft_taggroups_fieldLayoutId_fk` (`fieldLayoutId`),
  CONSTRAINT `craft_taggroups_fieldLayoutId_fk` FOREIGN KEY (`fieldLayoutId`) REFERENCES `craft_fieldlayouts` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `craft_taggroups` WRITE;
/*!40000 ALTER TABLE `craft_taggroups` DISABLE KEYS */;

INSERT INTO `craft_taggroups` (`id`, `name`, `handle`, `fieldLayoutId`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(1,'Default','default',1,'2014-04-30 13:25:22','2014-04-30 13:25:22','e52cd203-574f-4700-994c-9d1bd90ef373');

/*!40000 ALTER TABLE `craft_taggroups` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table craft_tags
# ------------------------------------------------------------

DROP TABLE IF EXISTS `craft_tags`;

CREATE TABLE `craft_tags` (
  `id` int(11) NOT NULL,
  `groupId` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `craft_tags_name_groupId_unq_idx` (`name`,`groupId`),
  KEY `craft_tags_groupId_fk` (`groupId`),
  CONSTRAINT `craft_tags_groupId_fk` FOREIGN KEY (`groupId`) REFERENCES `craft_taggroups` (`id`) ON DELETE CASCADE,
  CONSTRAINT `craft_tags_id_fk` FOREIGN KEY (`id`) REFERENCES `craft_elements` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table craft_tasks
# ------------------------------------------------------------

DROP TABLE IF EXISTS `craft_tasks`;

CREATE TABLE `craft_tasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `root` int(11) unsigned DEFAULT NULL,
  `lft` int(11) unsigned NOT NULL,
  `rgt` int(11) unsigned NOT NULL,
  `level` smallint(6) unsigned NOT NULL,
  `currentStep` int(11) unsigned DEFAULT NULL,
  `totalSteps` int(11) unsigned DEFAULT NULL,
  `status` enum('pending','error','running') COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8_unicode_ci,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `craft_tasks_root_idx` (`root`),
  KEY `craft_tasks_lft_idx` (`lft`),
  KEY `craft_tasks_rgt_idx` (`rgt`),
  KEY `craft_tasks_level_idx` (`level`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table craft_templatecachecriteria
# ------------------------------------------------------------

DROP TABLE IF EXISTS `craft_templatecachecriteria`;

CREATE TABLE `craft_templatecachecriteria` (
  `cacheId` int(11) NOT NULL,
  `type` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `criteria` text COLLATE utf8_unicode_ci NOT NULL,
  KEY `craft_templatecachecriteria_cacheId_fk` (`cacheId`),
  CONSTRAINT `craft_templatecachecriteria_cacheId_fk` FOREIGN KEY (`cacheId`) REFERENCES `craft_templatecaches` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table craft_templatecacheelements
# ------------------------------------------------------------

DROP TABLE IF EXISTS `craft_templatecacheelements`;

CREATE TABLE `craft_templatecacheelements` (
  `cacheId` int(11) NOT NULL,
  `elementId` int(11) NOT NULL,
  KEY `craft_templatecacheelements_cacheId_fk` (`cacheId`),
  KEY `craft_templatecacheelements_elementId_fk` (`elementId`),
  CONSTRAINT `craft_templatecacheelements_elementId_fk` FOREIGN KEY (`elementId`) REFERENCES `craft_elements` (`id`) ON DELETE CASCADE,
  CONSTRAINT `craft_templatecacheelements_cacheId_fk` FOREIGN KEY (`cacheId`) REFERENCES `craft_templatecaches` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table craft_templatecaches
# ------------------------------------------------------------

DROP TABLE IF EXISTS `craft_templatecaches`;

CREATE TABLE `craft_templatecaches` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cacheKey` varchar(36) COLLATE utf8_unicode_ci NOT NULL,
  `locale` char(12) COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `expiryDate` datetime NOT NULL,
  `body` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `craft_templatecaches_expiryDate_cacheKey_locale_path_idx` (`expiryDate`,`cacheKey`,`locale`,`path`),
  KEY `craft_templatecaches_locale_fk` (`locale`),
  CONSTRAINT `craft_templatecaches_locale_fk` FOREIGN KEY (`locale`) REFERENCES `craft_locales` (`locale`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table craft_usergroups
# ------------------------------------------------------------

DROP TABLE IF EXISTS `craft_usergroups`;

CREATE TABLE `craft_usergroups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `handle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table craft_usergroups_users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `craft_usergroups_users`;

CREATE TABLE `craft_usergroups_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `groupId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `craft_usergroups_users_groupId_userId_unq_idx` (`groupId`,`userId`),
  KEY `craft_usergroups_users_userId_fk` (`userId`),
  CONSTRAINT `craft_usergroups_users_userId_fk` FOREIGN KEY (`userId`) REFERENCES `craft_users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `craft_usergroups_users_groupId_fk` FOREIGN KEY (`groupId`) REFERENCES `craft_usergroups` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table craft_userpermissions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `craft_userpermissions`;

CREATE TABLE `craft_userpermissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `craft_userpermissions_name_unq_idx` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table craft_userpermissions_usergroups
# ------------------------------------------------------------

DROP TABLE IF EXISTS `craft_userpermissions_usergroups`;

CREATE TABLE `craft_userpermissions_usergroups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `permissionId` int(11) NOT NULL,
  `groupId` int(11) NOT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `craft_userpermissions_usergroups_permissionId_groupId_unq_idx` (`permissionId`,`groupId`),
  KEY `craft_userpermissions_usergroups_groupId_fk` (`groupId`),
  CONSTRAINT `craft_userpermissions_usergroups_groupId_fk` FOREIGN KEY (`groupId`) REFERENCES `craft_usergroups` (`id`) ON DELETE CASCADE,
  CONSTRAINT `craft_userpermissions_usergroups_permissionId_fk` FOREIGN KEY (`permissionId`) REFERENCES `craft_userpermissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table craft_userpermissions_users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `craft_userpermissions_users`;

CREATE TABLE `craft_userpermissions_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `permissionId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `craft_userpermissions_users_permissionId_userId_unq_idx` (`permissionId`,`userId`),
  KEY `craft_userpermissions_users_userId_fk` (`userId`),
  CONSTRAINT `craft_userpermissions_users_userId_fk` FOREIGN KEY (`userId`) REFERENCES `craft_users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `craft_userpermissions_users_permissionId_fk` FOREIGN KEY (`permissionId`) REFERENCES `craft_userpermissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table craft_users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `craft_users`;

CREATE TABLE `craft_users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `firstName` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastName` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` char(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `preferredLocale` char(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `admin` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `client` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `status` enum('active','locked','suspended','pending','archived') COLLATE utf8_unicode_ci DEFAULT 'pending',
  `lastLoginDate` datetime DEFAULT NULL,
  `lastLoginAttemptIPAddress` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `invalidLoginWindowStart` datetime DEFAULT NULL,
  `invalidLoginCount` tinyint(4) unsigned DEFAULT NULL,
  `lastInvalidLoginDate` datetime DEFAULT NULL,
  `lockoutDate` datetime DEFAULT NULL,
  `verificationCode` char(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `verificationCodeIssuedDate` datetime DEFAULT NULL,
  `unverifiedEmail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `passwordResetRequired` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `lastPasswordChangeDate` datetime DEFAULT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `craft_users_username_unq_idx` (`username`),
  UNIQUE KEY `craft_users_email_unq_idx` (`email`),
  KEY `craft_users_verificationCode_idx` (`verificationCode`),
  KEY `craft_users_uid_idx` (`uid`),
  KEY `craft_users_preferredLocale_fk` (`preferredLocale`),
  CONSTRAINT `craft_users_preferredLocale_fk` FOREIGN KEY (`preferredLocale`) REFERENCES `craft_locales` (`locale`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `craft_users_id_fk` FOREIGN KEY (`id`) REFERENCES `craft_elements` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `craft_users` WRITE;
/*!40000 ALTER TABLE `craft_users` DISABLE KEYS */;

INSERT INTO `craft_users` (`id`, `username`, `photo`, `firstName`, `lastName`, `email`, `password`, `preferredLocale`, `admin`, `client`, `status`, `lastLoginDate`, `lastLoginAttemptIPAddress`, `invalidLoginWindowStart`, `invalidLoginCount`, `lastInvalidLoginDate`, `lockoutDate`, `verificationCode`, `verificationCodeIssuedDate`, `unverifiedEmail`, `passwordResetRequired`, `lastPasswordChangeDate`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(1,'admin',NULL,NULL,NULL,'root@localhost.local','$2a$13$O6zL5ZKJtRjURlxajaLjbe7aGSlhWJEgmzn/f0zegTHHflgiuUSta',NULL,1,0,'active','2014-05-01 17:25:10','10.0.2.2',NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'2014-04-30 13:25:21','2014-04-30 13:25:21','2014-05-01 17:25:10','71130027-843b-4b5a-bd08-85be418ada40');

/*!40000 ALTER TABLE `craft_users` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table craft_widgets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `craft_widgets`;

CREATE TABLE `craft_widgets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `type` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `sortOrder` tinyint(4) DEFAULT NULL,
  `settings` text COLLATE utf8_unicode_ci,
  `enabled` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `craft_widgets_userId_fk` (`userId`),
  CONSTRAINT `craft_widgets_userId_fk` FOREIGN KEY (`userId`) REFERENCES `craft_users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `craft_widgets` WRITE;
/*!40000 ALTER TABLE `craft_widgets` DISABLE KEYS */;

INSERT INTO `craft_widgets` (`id`, `userId`, `type`, `sortOrder`, `settings`, `enabled`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(1,1,'QuickPost',1,'{\"section\":\"2\"}',1,'2014-04-30 13:25:43','2014-04-30 13:25:43','af544eeb-b227-47a6-9dc3-271f083bb905');

INSERT INTO `craft_widgets` (`id`, `userId`, `type`, `sortOrder`, `settings`, `enabled`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(2,1,'RecentEntries',2,NULL,1,'2014-04-30 13:25:43','2014-04-30 13:25:43','67126468-3e3b-41bc-815f-ef04ccead9f5');

INSERT INTO `craft_widgets` (`id`, `userId`, `type`, `sortOrder`, `settings`, `enabled`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(3,1,'GetHelp',3,NULL,1,'2014-04-30 13:25:43','2014-04-30 13:25:43','b75eb356-e6df-48f8-80df-08ca2a72e450');

INSERT INTO `craft_widgets` (`id`, `userId`, `type`, `sortOrder`, `settings`, `enabled`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(4,1,'Updates',4,NULL,1,'2014-04-30 13:25:43','2014-04-30 13:25:43','daac1596-6167-4344-a1b0-8425cbb37a04');

INSERT INTO `craft_widgets` (`id`, `userId`, `type`, `sortOrder`, `settings`, `enabled`, `dateCreated`, `dateUpdated`, `uid`)
VALUES
	(5,1,'Feed',5,'{\"url\":\"http:\\/\\/feeds.feedburner.com\\/blogandtonic\",\"title\":\"Blog & Tonic\"}',1,'2014-04-30 13:25:43','2014-04-30 13:25:43','8a432fa0-aefb-4923-b076-40bc22f03f6a');

/*!40000 ALTER TABLE `craft_widgets` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
