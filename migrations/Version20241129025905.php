<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241129025905 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE Etudiant (id INT AUTO_INCREMENT NOT NULL, promotion_id INT NOT NULL, semestre_id INT NOT NULL, nom_etudiant VARCHAR(200) NOT NULL, date_naissance DATE NOT NULL, INDEX IDX_880840B5139DF194 (promotion_id), INDEX IDX_880840B55577AFDB (semestre_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE promotion (id INT AUTO_INCREMENT NOT NULL, date_promotion DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE semestre (id INT AUTO_INCREMENT NOT NULL, nom_semestre VARCHAR(3) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE Etudiant ADD CONSTRAINT FK_880840B5139DF194 FOREIGN KEY (promotion_id) REFERENCES promotion (id)');
        $this->addSql('ALTER TABLE Etudiant ADD CONSTRAINT FK_880840B55577AFDB FOREIGN KEY (semestre_id) REFERENCES semestre (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE Etudiant DROP FOREIGN KEY FK_880840B5139DF194');
        $this->addSql('ALTER TABLE Etudiant DROP FOREIGN KEY FK_880840B55577AFDB');
        $this->addSql('DROP TABLE Etudiant');
        $this->addSql('DROP TABLE promotion');
        $this->addSql('DROP TABLE semestre');
    }
}
