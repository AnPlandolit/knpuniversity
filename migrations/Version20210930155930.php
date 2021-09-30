<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210930155930 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE persona_fisica DROP CONSTRAINT fk_fa4edbea6c13c12f');
        $this->addSql('DROP SEQUENCE autopercibido_id_seq CASCADE');
        $this->addSql('DROP TABLE autopercibido');
        $this->addSql('DROP INDEX idx_fa4edbea6c13c12f');
        $this->addSql('ALTER TABLE persona_fisica DROP autopercibido_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('CREATE SEQUENCE autopercibido_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE autopercibido (id INT NOT NULL, genero VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('ALTER TABLE persona_fisica ADD autopercibido_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE persona_fisica ADD CONSTRAINT fk_fa4edbea6c13c12f FOREIGN KEY (autopercibido_id) REFERENCES autopercibido (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX idx_fa4edbea6c13c12f ON persona_fisica (autopercibido_id)');
    }
}
