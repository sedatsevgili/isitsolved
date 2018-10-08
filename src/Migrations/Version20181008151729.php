<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181008151729 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE issue (id INT AUTO_INCREMENT NOT NULL, project_id INT NOT NULL, title VARCHAR(1024) NOT NULL, status VARCHAR(255) NOT NULL, resolved_in VARCHAR(1024) NOT NULL, resolved_at DATETIME NOT NULL, created_at DATETIME NOT NULL, INDEX IDX_12AD233E166D1F9C (project_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE project (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, un_resolved_issue_count INT NOT NULL, resolved_issue_count INT NOT NULL, language VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE issue ADD CONSTRAINT FK_12AD233E166D1F9C FOREIGN KEY (project_id) REFERENCES project (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE issue DROP FOREIGN KEY FK_12AD233E166D1F9C');
        $this->addSql('DROP TABLE issue');
        $this->addSql('DROP TABLE project');
    }
}
