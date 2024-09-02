<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240827182937 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE days ADD wokspace_id INT NOT NULL');
        $this->addSql('ALTER TABLE days ADD CONSTRAINT FK_EBE4FC664313A31 FOREIGN KEY (wokspace_id) REFERENCES work_space (id)');
        $this->addSql('CREATE INDEX IDX_EBE4FC664313A31 ON days (wokspace_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE days DROP FOREIGN KEY FK_EBE4FC664313A31');
        $this->addSql('DROP INDEX IDX_EBE4FC664313A31 ON days');
        $this->addSql('ALTER TABLE days DROP wokspace_id');
    }
}
