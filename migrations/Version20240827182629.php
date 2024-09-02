<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240827182629 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE days ADD CONSTRAINT FK_EBE4FC6682D40A1F FOREIGN KEY (workspace_id) REFERENCES work_space (id)');
        $this->addSql('CREATE INDEX IDX_EBE4FC6682D40A1F ON days (workspace_id)');
        $this->addSql('ALTER TABLE level ADD workspace_id INT NOT NULL');
        $this->addSql('ALTER TABLE level ADD CONSTRAINT FK_9AEACC1382D40A1F FOREIGN KEY (workspace_id) REFERENCES work_space (id)');
        $this->addSql('CREATE INDEX IDX_9AEACC1382D40A1F ON level (workspace_id)');
        $this->addSql('ALTER TABLE matter ADD workspace_id INT NOT NULL');
        $this->addSql('ALTER TABLE matter ADD CONSTRAINT FK_B0DE9B6F82D40A1F FOREIGN KEY (workspace_id) REFERENCES work_space (id)');
        $this->addSql('CREATE INDEX IDX_B0DE9B6F82D40A1F ON matter (workspace_id)');
        $this->addSql('ALTER TABLE time_table ADD workspace_id INT NOT NULL');
        $this->addSql('ALTER TABLE time_table ADD CONSTRAINT FK_B35B6E3A82D40A1F FOREIGN KEY (workspace_id) REFERENCES work_space (id)');
        $this->addSql('CREATE INDEX IDX_B35B6E3A82D40A1F ON time_table (workspace_id)');
        $this->addSql('ALTER TABLE user ADD workspace_id INT NOT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D64982D40A1F FOREIGN KEY (workspace_id) REFERENCES work_space (id)');
        $this->addSql('CREATE INDEX IDX_8D93D64982D40A1F ON user (workspace_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE days DROP FOREIGN KEY FK_EBE4FC6682D40A1F');
        $this->addSql('DROP INDEX IDX_EBE4FC6682D40A1F ON days');
        $this->addSql('ALTER TABLE level DROP FOREIGN KEY FK_9AEACC1382D40A1F');
        $this->addSql('DROP INDEX IDX_9AEACC1382D40A1F ON level');
        $this->addSql('ALTER TABLE level DROP workspace_id');
        $this->addSql('ALTER TABLE matter DROP FOREIGN KEY FK_B0DE9B6F82D40A1F');
        $this->addSql('DROP INDEX IDX_B0DE9B6F82D40A1F ON matter');
        $this->addSql('ALTER TABLE matter DROP workspace_id');
        $this->addSql('ALTER TABLE time_table DROP FOREIGN KEY FK_B35B6E3A82D40A1F');
        $this->addSql('DROP INDEX IDX_B35B6E3A82D40A1F ON time_table');
        $this->addSql('ALTER TABLE time_table DROP workspace_id');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D64982D40A1F');
        $this->addSql('DROP INDEX IDX_8D93D64982D40A1F ON user');
        $this->addSql('ALTER TABLE user DROP workspace_id');
    }
}
