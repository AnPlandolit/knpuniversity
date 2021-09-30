<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210930122245 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE persona_fisica ADD usuario_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE persona_fisica ADD CONSTRAINT FK_FA4EDBEADB38439E FOREIGN KEY (usuario_id) REFERENCES usuario (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_FA4EDBEADB38439E ON persona_fisica (usuario_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE persona_fisica DROP CONSTRAINT FK_FA4EDBEADB38439E');
        $this->addSql('DROP INDEX UNIQ_FA4EDBEADB38439E');
        $this->addSql('ALTER TABLE persona_fisica DROP usuario_id');
    }
}