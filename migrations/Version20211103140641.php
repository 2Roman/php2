<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211103140641 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE product (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, price DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE calc_log');
        $this->addSql('DROP TABLE images');
        $this->addSql('DROP TABLE t1');
        $this->addSql('DROP TABLE tmp');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE calc_log (id INT UNSIGNED AUTO_INCREMENT NOT NULL COMMENT \'номер записи уникальный инкрементом\', dt DATE DEFAULT NULL COMMENT \'дата из имени файла билайн\', done TINYINT(1) DEFAULT \'0\', proc_time INT UNSIGNED DEFAULT NULL, created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL COMMENT \'дата время создания записи\', updated_at DATETIME DEFAULT NULL COMMENT \'дата время последнего изменения записи\', UNIQUE INDEX dt (dt), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'лог по пересчёту кубов\' ');
        $this->addSql('CREATE TABLE images (id INT UNSIGNED AUTO_INCREMENT NOT NULL, image_patch VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'\' COLLATE `utf8mb4_general_ci`, viewed INT UNSIGNED DEFAULT 0, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE t1 (c1 DOUBLE PRECISION DEFAULT NULL, from_ip INT DEFAULT NULL) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE tmp (devid INT DEFAULT NULL, subsid INT DEFAULT NULL, view_start_time DATETIME DEFAULT NULL, view_end_time DATETIME DEFAULT NULL, chanid INT DEFAULT NULL) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE product');
    }
}
