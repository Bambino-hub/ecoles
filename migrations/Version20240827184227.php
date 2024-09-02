<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240827184227 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE matter ADD works_pace_id INT NOT NULL');
        $this->addSql('ALTER TABLE matter ADD CONSTRAINT FK_B0DE9B6F3CFEDFB2 FOREIGN KEY (works_pace_id) REFERENCES work_space (id)');
        $this->addSql('CREATE INDEX IDX_B0DE9B6F3CFEDFB2 ON matter (works_pace_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE matter DROP FOREIGN KEY FK_B0DE9B6F3CFEDFB2');
        $this->addSql('DROP INDEX IDX_B0DE9B6F3CFEDFB2 ON matter');
        $this->addSql('ALTER TABLE matter DROP works_pace_id');
    }
}
