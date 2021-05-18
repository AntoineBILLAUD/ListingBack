<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE developers (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, language VARCHAR(255) NOT NULL, website VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE games (id INT AUTO_INCREMENT NOT NULL, length_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, original_title VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, INDEX IDX_FF232B3161ED455A (length_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE games_developers (id INT AUTO_INCREMENT NOT NULL, game_id INT DEFAULT NULL, developer_id INT DEFAULT NULL, INDEX IDX_AB946AD9E48FD905 (game_id), INDEX IDX_AB946AD964DD9267 (developer_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE games_pictures (id INT AUTO_INCREMENT NOT NULL, game_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, safe TINYINT(1) DEFAULT \'1\' NOT NULL, INDEX IDX_267B48FCE48FD905 (game_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE games_publishers (id INT AUTO_INCREMENT NOT NULL, game_id INT DEFAULT NULL, publisher_id INT DEFAULT NULL, INDEX IDX_2408E778E48FD905 (game_id), INDEX IDX_2408E77840C86FCE (publisher_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE games_releases (id INT AUTO_INCREMENT NOT NULL, game_id INT DEFAULT NULL, date DATE NOT NULL, language VARCHAR(3) NOT NULL, INDEX IDX_D19183EDE48FD905 (game_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE games_tags (id INT AUTO_INCREMENT NOT NULL, game_id INT DEFAULT NULL, tag_id INT DEFAULT NULL, INDEX IDX_70C458FFE48FD905 (game_id), INDEX IDX_70C458FFBAD26311 (tag_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE lengths (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, length VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE publishers (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, language VARCHAR(255) NOT NULL, website VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tags (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, sexual_content TINYINT(1) DEFAULT \'0\' NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE games ADD CONSTRAINT FK_FF232B3161ED455A FOREIGN KEY (length_id) REFERENCES lengths (id)');
        $this->addSql('ALTER TABLE games_developers ADD CONSTRAINT FK_AB946AD9E48FD905 FOREIGN KEY (game_id) REFERENCES games (id)');
        $this->addSql('ALTER TABLE games_developers ADD CONSTRAINT FK_AB946AD964DD9267 FOREIGN KEY (developer_id) REFERENCES developers (id)');
        $this->addSql('ALTER TABLE games_pictures ADD CONSTRAINT FK_267B48FCE48FD905 FOREIGN KEY (game_id) REFERENCES games (id)');
        $this->addSql('ALTER TABLE games_publishers ADD CONSTRAINT FK_2408E778E48FD905 FOREIGN KEY (game_id) REFERENCES games (id)');
        $this->addSql('ALTER TABLE games_publishers ADD CONSTRAINT FK_2408E77840C86FCE FOREIGN KEY (publisher_id) REFERENCES publishers (id)');
        $this->addSql('ALTER TABLE games_releases ADD CONSTRAINT FK_D19183EDE48FD905 FOREIGN KEY (game_id) REFERENCES games (id)');
        $this->addSql('ALTER TABLE games_tags ADD CONSTRAINT FK_70C458FFE48FD905 FOREIGN KEY (game_id) REFERENCES games (id)');
        $this->addSql('ALTER TABLE games_tags ADD CONSTRAINT FK_70C458FFBAD26311 FOREIGN KEY (tag_id) REFERENCES tags (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE games_developers DROP FOREIGN KEY FK_AB946AD964DD9267');
        $this->addSql('ALTER TABLE games_developers DROP FOREIGN KEY FK_AB946AD9E48FD905');
        $this->addSql('ALTER TABLE games_pictures DROP FOREIGN KEY FK_267B48FCE48FD905');
        $this->addSql('ALTER TABLE games_publishers DROP FOREIGN KEY FK_2408E778E48FD905');
        $this->addSql('ALTER TABLE games_releases DROP FOREIGN KEY FK_D19183EDE48FD905');
        $this->addSql('ALTER TABLE games_tags DROP FOREIGN KEY FK_70C458FFE48FD905');
        $this->addSql('ALTER TABLE games DROP FOREIGN KEY FK_FF232B3161ED455A');
        $this->addSql('ALTER TABLE games_publishers DROP FOREIGN KEY FK_2408E77840C86FCE');
        $this->addSql('ALTER TABLE games_tags DROP FOREIGN KEY FK_70C458FFBAD26311');
        $this->addSql('DROP TABLE developers');
        $this->addSql('DROP TABLE games');
        $this->addSql('DROP TABLE games_developers');
        $this->addSql('DROP TABLE games_pictures');
        $this->addSql('DROP TABLE games_publishers');
        $this->addSql('DROP TABLE games_releases');
        $this->addSql('DROP TABLE games_tags');
        $this->addSql('DROP TABLE lengths');
        $this->addSql('DROP TABLE publishers');
        $this->addSql('DROP TABLE tags');
    }
}
