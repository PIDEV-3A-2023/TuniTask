<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230417014353 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE rate DROP FOREIGN KEY rate_ibfk_1');
        $this->addSql('ALTER TABLE rate DROP FOREIGN KEY rate_ibfk_2');
        $this->addSql('DROP TABLE rate');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY commentaire_ibfk_1');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY commentaire_ibfk_2');
        $this->addSql('ALTER TABLE commentaire CHANGE offre_id offre_id INT DEFAULT NULL');
        $this->addSql('DROP INDEX commentaire_ibfk_2 ON commentaire');
        $this->addSql('CREATE INDEX IDX_67F068BCA76ED395 ON commentaire (user_id)');
        $this->addSql('DROP INDEX commentaire_ibfk_1 ON commentaire');
        $this->addSql('CREATE INDEX IDX_67F068BC4CC8505A ON commentaire (offre_id)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT commentaire_ibfk_1 FOREIGN KEY (offre_id) REFERENCES offre (idoffre)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT commentaire_ibfk_2 FOREIGN KEY (user_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE offre DROP FOREIGN KEY offre_ibfk_1');
        $this->addSql('DROP INDEX offre_ibfk_1 ON offre');
        $this->addSql('CREATE INDEX IDX_AF86866FA76ED395 ON offre (user_id)');
        $this->addSql('ALTER TABLE offre ADD CONSTRAINT offre_ibfk_1 FOREIGN KEY (user_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE role DROP FOREIGN KEY role_ibfk_1');
        $this->addSql('DROP INDEX id_user ON role');
        $this->addSql('ALTER TABLE role CHANGE role_name role_name VARCHAR(255) NOT NULL, CHANGE skills skills VARCHAR(255) NOT NULL, CHANGE experience experience VARCHAR(255) NOT NULL, CHANGE entreprise entreprise VARCHAR(255) NOT NULL, CHANGE langage_de_programmation langage_de_programmation VARCHAR(255) NOT NULL, CHANGE id_user id_user_id INT NOT NULL');
        $this->addSql('ALTER TABLE role ADD CONSTRAINT FK_57698A6A79F37AE5 FOREIGN KEY (id_user_id) REFERENCES users (id)');
        $this->addSql('CREATE INDEX IDX_57698A6A79F37AE5 ON role (id_user_id)');
        $this->addSql('DROP INDEX UC_email ON users');
        $this->addSql('ALTER TABLE users DROP date_of_birth, DROP created_at, CHANGE srcimage srcimage VARCHAR(500) NOT NULL, CHANGE etat etat TINYINT(1) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE rate (idrate INT AUTO_INCREMENT NOT NULL, offre_id INT NOT NULL, user_id INT NOT NULL, rate INT NOT NULL, INDEX rate_ibfk_1 (user_id), INDEX rate_ibfk_2 (offre_id), PRIMARY KEY(idrate)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE rate ADD CONSTRAINT rate_ibfk_1 FOREIGN KEY (user_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE rate ADD CONSTRAINT rate_ibfk_2 FOREIGN KEY (offre_id) REFERENCES offre (idoffre)');
        $this->addSql('DROP TABLE messenger_messages');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BCA76ED395');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BC4CC8505A');
        $this->addSql('ALTER TABLE commentaire CHANGE offre_id offre_id INT NOT NULL');
        $this->addSql('DROP INDEX idx_67f068bc4cc8505a ON commentaire');
        $this->addSql('CREATE INDEX commentaire_ibfk_1 ON commentaire (offre_id)');
        $this->addSql('DROP INDEX idx_67f068bca76ed395 ON commentaire');
        $this->addSql('CREATE INDEX commentaire_ibfk_2 ON commentaire (user_id)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BCA76ED395 FOREIGN KEY (user_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC4CC8505A FOREIGN KEY (offre_id) REFERENCES offre (idoffre)');
        $this->addSql('ALTER TABLE offre DROP FOREIGN KEY FK_AF86866FA76ED395');
        $this->addSql('DROP INDEX idx_af86866fa76ed395 ON offre');
        $this->addSql('CREATE INDEX offre_ibfk_1 ON offre (user_id)');
        $this->addSql('ALTER TABLE offre ADD CONSTRAINT FK_AF86866FA76ED395 FOREIGN KEY (user_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE role DROP FOREIGN KEY FK_57698A6A79F37AE5');
        $this->addSql('DROP INDEX IDX_57698A6A79F37AE5 ON role');
        $this->addSql('ALTER TABLE role CHANGE role_name role_name VARCHAR(255) DEFAULT NULL, CHANGE skills skills VARCHAR(255) DEFAULT NULL, CHANGE experience experience VARCHAR(255) DEFAULT NULL, CHANGE entreprise entreprise VARCHAR(255) DEFAULT NULL, CHANGE langage_de_programmation langage_de_programmation VARCHAR(255) DEFAULT NULL, CHANGE id_user_id id_user INT NOT NULL');
        $this->addSql('ALTER TABLE role ADD CONSTRAINT role_ibfk_1 FOREIGN KEY (id_user) REFERENCES users (id)');
        $this->addSql('CREATE INDEX id_user ON role (id_user)');
        $this->addSql('ALTER TABLE users ADD date_of_birth DATE NOT NULL, ADD created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, CHANGE srcimage srcimage VARCHAR(500) DEFAULT NULL, CHANGE etat etat TINYINT(1) DEFAULT NULL');
        $this->addSql('CREATE UNIQUE INDEX UC_email ON users (email)');
    }
}
