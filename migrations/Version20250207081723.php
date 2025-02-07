<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250207081723 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article ADD date_modification DATETIME NOT NULL');
        $this->addSql('ALTER TABLE categorie ADD date_creation DATETIME NOT NULL, ADD date_modification DATETIME NOT NULL');
        $this->addSql('ALTER TABLE commentaire ADD date_modification DATETIME NOT NULL');
        $this->addSql('ALTER TABLE utilisateur ADD date_modification DATETIME NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article DROP date_modification');
        $this->addSql('ALTER TABLE categorie DROP date_creation, DROP date_modification');
        $this->addSql('ALTER TABLE commentaire DROP date_modification');
        $this->addSql('ALTER TABLE utilisateur DROP date_modification');
    }
}
