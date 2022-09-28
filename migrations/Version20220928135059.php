<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220928135059 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE users DROP FOREIGN KEY users_ibfk_2');
        $this->addSql('ALTER TABLE users DROP FOREIGN KEY users_ibfk_1');
        $this->addSql('CREATE TABLE bello (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE celestin (id INT AUTO_INCREMENT NOT NULL, bello_id INT NOT NULL, nom VARCHAR(255) NOT NULL, INDEX IDX_F86B7F20F7D3B5F7 (bello_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE plage_horaire (id INT AUTO_INCREMENT NOT NULL, heure_arrivee TIME NOT NULL, heure_depart TIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE celestin ADD CONSTRAINT FK_F86B7F20F7D3B5F7 FOREIGN KEY (bello_id) REFERENCES bello (id)');
        $this->addSql('ALTER TABLE preferences DROP FOREIGN KEY preferences_ibfk_1');
        $this->addSql('ALTER TABLE preferences DROP FOREIGN KEY preferences_ibfk_2');
        $this->addSql('ALTER TABLE paiements DROP FOREIGN KEY paiements_ibfk_1');
        $this->addSql('ALTER TABLE problemes DROP FOREIGN KEY problemes_ibfk_1');
        $this->addSql('ALTER TABLE problemes DROP FOREIGN KEY problemes_ibfk_2');
        $this->addSql('ALTER TABLE proposition_idees DROP FOREIGN KEY proposition_idees_ibfk_3');
        $this->addSql('ALTER TABLE proposition_idees DROP FOREIGN KEY proposition_idees_ibfk_2');
        $this->addSql('ALTER TABLE reagir DROP FOREIGN KEY reagir_ibfk_1');
        $this->addSql('ALTER TABLE reagir DROP FOREIGN KEY reagir_ibfk_2');
        $this->addSql('ALTER TABLE reservations DROP FOREIGN KEY reservations_ibfk_1');
        $this->addSql('ALTER TABLE reservations DROP FOREIGN KEY reservations_ibfk_2');
        $this->addSql('ALTER TABLE role_permissions DROP FOREIGN KEY role_permissions_ibfk_2');
        $this->addSql('ALTER TABLE role_permissions DROP FOREIGN KEY role_permissions_ibfk_1');
        $this->addSql('ALTER TABLE service_adminis DROP FOREIGN KEY service_adminis_ibfk_1');
        $this->addSql('ALTER TABLE service_adminis DROP FOREIGN KEY service_adminis_ibfk_2');
        $this->addSql('ALTER TABLE signaler DROP FOREIGN KEY signaler_ibfk_1');
        $this->addSql('ALTER TABLE signaler DROP FOREIGN KEY signaler_ibfk_2');
        $this->addSql('ALTER TABLE sondages DROP FOREIGN KEY sondages_ibfk_1');
        $this->addSql('ALTER TABLE collectes DROP FOREIGN KEY collectes_ibfk_1');
        $this->addSql('ALTER TABLE liker DROP FOREIGN KEY liker_ibfk_1');
        $this->addSql('ALTER TABLE liker DROP FOREIGN KEY liker_ibfk_2');
        $this->addSql('ALTER TABLE commenter DROP FOREIGN KEY commenter_ibfk_2');
        $this->addSql('ALTER TABLE commenter DROP FOREIGN KEY commenter_ibfk_1');
        $this->addSql('ALTER TABLE mappings DROP FOREIGN KEY mappings_ibfk_3');
        $this->addSql('ALTER TABLE mappings DROP FOREIGN KEY mappings_ibfk_1');
        $this->addSql('ALTER TABLE mappings DROP FOREIGN KEY mappings_ibfk_4');
        $this->addSql('ALTER TABLE mappings DROP FOREIGN KEY mappings_ibfk_2');
        $this->addSql('ALTER TABLE place_parkings DROP FOREIGN KEY place_parkings_ibfk_1');
        $this->addSql('ALTER TABLE votes DROP FOREIGN KEY votes_ibfk_1');
        $this->addSql('ALTER TABLE votes DROP FOREIGN KEY votes_ibfk_2');
        $this->addSql('ALTER TABLE informations DROP FOREIGN KEY informations_ibfk_1');
        $this->addSql('ALTER TABLE informations DROP FOREIGN KEY informations_ibfk_2');
        $this->addSql('ALTER TABLE options DROP FOREIGN KEY options_ibfk_1');
        $this->addSql('ALTER TABLE participer DROP FOREIGN KEY participer_ibfk_1');
        $this->addSql('ALTER TABLE participer DROP FOREIGN KEY participer_ibfk_2');
        $this->addSql('ALTER TABLE projets DROP FOREIGN KEY projets_ibfk_2');
        $this->addSql('ALTER TABLE projets DROP FOREIGN KEY projets_ibfk_1');
        $this->addSql('DROP TABLE cartes');
        $this->addSql('DROP TABLE categories');
        $this->addSql('DROP TABLE preferences');
        $this->addSql('DROP TABLE communes');
        $this->addSql('DROP TABLE failed_jobs');
        $this->addSql('DROP TABLE paiements');
        $this->addSql('DROP TABLE problemes');
        $this->addSql('DROP TABLE migrations');
        $this->addSql('DROP TABLE oauth_access_tokens');
        $this->addSql('DROP TABLE oauth_auth_codes');
        $this->addSql('DROP TABLE oauth_clients');
        $this->addSql('DROP TABLE oauth_personal_access_clients');
        $this->addSql('DROP TABLE oauth_refresh_tokens');
        $this->addSql('DROP TABLE password_resets');
        $this->addSql('DROP TABLE personal_access_tokens');
        $this->addSql('DROP TABLE proposition_idees');
        $this->addSql('DROP TABLE reagir');
        $this->addSql('DROP TABLE reservations');
        $this->addSql('DROP TABLE role_permissions');
        $this->addSql('DROP TABLE service_adminis');
        $this->addSql('DROP TABLE signaler');
        $this->addSql('DROP TABLE sondages');
        $this->addSql('DROP TABLE themes');
        $this->addSql('DROP TABLE type_informations');
        $this->addSql('DROP TABLE type_problemes');
        $this->addSql('DROP TABLE type_services');
        $this->addSql('DROP TABLE type_utilisateurs');
        $this->addSql('DROP TABLE websockets_statistics_entries');
        $this->addSql('DROP TABLE collectes');
        $this->addSql('DROP TABLE liker');
        $this->addSql('DROP TABLE commenter');
        $this->addSql('DROP TABLE mappings');
        $this->addSql('DROP TABLE place_parkings');
        $this->addSql('DROP TABLE votes');
        $this->addSql('DROP TABLE informations');
        $this->addSql('DROP TABLE options');
        $this->addSql('DROP TABLE participer');
        $this->addSql('DROP TABLE projets');
        $this->addSql('ALTER TABLE parking ADD CONSTRAINT FK_B237527A79F37AE5 FOREIGN KEY (id_user_id) REFERENCES users (id)');
        $this->addSql('DROP INDEX IdCommune ON users');
        $this->addSql('DROP INDEX IdTypeUtilisateur ON users');
        $this->addSql('ALTER TABLE users DROP image, DROP name, DROP email, DROP email_verified_at, DROP password, DROP remember_token, DROP prenom, DROP phone, DROP sexe, DROP date_naissance, DROP lieu_naissance, DROP IdCommune, DROP IdTypeUtilisateur, DROP created_at, DROP last_login, DROP otp, DROP active, DROP updated_at, DROP deleted_at');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE cartes (id INT AUTO_INCREMENT NOT NULL, type_service VARCHAR(191) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_general_ci`, emplacement VARCHAR(191) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_general_ci`, created_at DATETIME DEFAULT CURRENT_TIMESTAMP, updated_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE categories (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(191) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_general_ci`, description VARCHAR(191) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_general_ci`, created_at DATETIME DEFAULT CURRENT_TIMESTAMP, updated_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, deleted_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE preferences (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(191) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_general_ci`, IdUser INT NOT NULL, IdTypeInformation INT NOT NULL, created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, updated_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, INDEX IdTypeInformation (IdTypeInformation), INDEX IdUser (IdUser), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE communes (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(191) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_general_ci`, created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, updated_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, deleted_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE failed_jobs (id BIGINT UNSIGNED AUTO_INCREMENT NOT NULL, uuid VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, connection TEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, queue TEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, payload LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, exception LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, failed_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, UNIQUE INDEX failed_jobs_uuid_unique (uuid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE paiements (id INT NOT NULL, montant INT NOT NULL, numero VARCHAR(191) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_general_ci`, reseau TEXT CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_general_ci`, status TEXT CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_general_ci`, IdReservation INT NOT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, deleted_at DATETIME DEFAULT NULL, INDEX IdReservation (IdReservation), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE problemes (id INT AUTO_INCREMENT NOT NULL, image VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_general_ci`, commentaire VARCHAR(155) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_general_ci`, localisation VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_general_ci`, IdUser INT NOT NULL, IdTypeProbleme INT NOT NULL, IdCommune INT NOT NULL, created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, updated_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, deleted_at DATETIME DEFAULT NULL, INDEX IdUser (IdUser), INDEX IdTypeProbleme (IdTypeProbleme), INDEX IdCommune (IdCommune), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE migrations (id INT UNSIGNED AUTO_INCREMENT NOT NULL, migration VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, batch INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE oauth_access_tokens (id VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, user_id BIGINT UNSIGNED DEFAULT NULL, client_id BIGINT UNSIGNED NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, scopes TEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, revoked TINYINT(1) NOT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, expires_at DATETIME DEFAULT NULL, INDEX oauth_access_tokens_user_id_index (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE oauth_auth_codes (id VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, user_id BIGINT UNSIGNED NOT NULL, client_id BIGINT UNSIGNED NOT NULL, scopes TEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, revoked TINYINT(1) NOT NULL, expires_at DATETIME DEFAULT NULL, INDEX oauth_auth_codes_user_id_index (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE oauth_clients (id BIGINT UNSIGNED AUTO_INCREMENT NOT NULL, user_id BIGINT UNSIGNED DEFAULT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, secret VARCHAR(100) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, provider VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, redirect TEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, personal_access_client TINYINT(1) NOT NULL, password_client TINYINT(1) NOT NULL, revoked TINYINT(1) NOT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, INDEX oauth_clients_user_id_index (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE oauth_personal_access_clients (id BIGINT UNSIGNED AUTO_INCREMENT NOT NULL, client_id BIGINT UNSIGNED NOT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE oauth_refresh_tokens (id VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, access_token_id VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, revoked TINYINT(1) NOT NULL, expires_at DATETIME DEFAULT NULL, INDEX oauth_refresh_tokens_access_token_id_index (access_token_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE password_resets (email VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, token VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, created_at DATETIME DEFAULT NULL, INDEX password_resets_email_index (email)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE personal_access_tokens (id BIGINT UNSIGNED AUTO_INCREMENT NOT NULL, tokenable_type VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, tokenable_id BIGINT UNSIGNED NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, token VARCHAR(64) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, abilities TEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, last_used_at DATETIME DEFAULT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, INDEX personal_access_tokens_tokenable_type_tokenable_id_index (tokenable_type, tokenable_id), UNIQUE INDEX personal_access_tokens_token_unique (token), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE proposition_idees (id INT AUTO_INCREMENT NOT NULL, description TEXT CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_general_ci`, IdUserLiker LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_bin`, IdUser INT NOT NULL, IdTheme INT NOT NULL, created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, updated_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, deleted_at DATETIME DEFAULT NULL, INDEX IdUser (IdUser), INDEX IdTheme (IdTheme), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE reagir (id INT AUTO_INCREMENT NOT NULL, description TEXT CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_general_ci`, IdUser INT NOT NULL, IdPropositionIdee INT NOT NULL, `like` TINYINT(1) DEFAULT 0 NOT NULL, dislike TINYINT(1) DEFAULT 0 NOT NULL, signaler TINYINT(1) DEFAULT 0 NOT NULL, created_at INT NOT NULL, INDEX IdUser (IdUser), INDEX IdPropositionIdee (IdPropositionIdee), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE reservations (id INT AUTO_INCREMENT NOT NULL, dateReservation DATETIME NOT NULL, heureStationnement TIME NOT NULL, heureSortie TIME NOT NULL, prix INT NOT NULL, IdUser INT NOT NULL, IdPlaceParking INT NOT NULL, created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, updated_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, deleted_at DATETIME DEFAULT NULL, INDEX IdUser (IdUser), INDEX IdPlaceParking (IdPlaceParking), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE role_permissions (id INT AUTO_INCREMENT NOT NULL, IdUser INT NOT NULL, IdTypeUtilisateur INT NOT NULL, created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, updated_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, INDEX IdUser (IdUser), INDEX IdTypeUtilisateur (IdTypeUtilisateur), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE service_adminis (id INT AUTO_INCREMENT NOT NULL, statut VARCHAR(255) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_general_ci`, jsonDonnee LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_bin`, nbreExemplaire INT DEFAULT NULL, codeUnique VARCHAR(15) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_general_ci`, copieImage VARCHAR(255) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_general_ci`, IdTypeService INT DEFAULT NULL, IdUser INT DEFAULT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, deleted_at DATETIME DEFAULT NULL, INDEX IdTypeService (IdTypeService), INDEX IdUser (IdUser), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE signaler (id INT AUTO_INCREMENT NOT NULL, IdUser INT NOT NULL, IdProposIdee INT NOT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, INDEX IdProposIdee (IdProposIdee), INDEX IdUser (IdUser), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE sondages (id INT AUTO_INCREMENT NOT NULL, description VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_general_ci`, IdUser INT NOT NULL, created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, updated_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, IdCommune INT NOT NULL, deleted_at DATETIME DEFAULT NULL, INDEX IdCommune (IdCommune), INDEX IdUser (IdUser), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE themes (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(191) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_general_ci`, created_at DATETIME DEFAULT CURRENT_TIMESTAMP, updated_at DATETIME DEFAULT CURRENT_TIMESTAMP, deleted_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE type_informations (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_general_ci`, created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, updated_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, deleted_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE type_problemes (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(191) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_general_ci`, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, deleted_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE type_services (id INT AUTO_INCREMENT NOT NULL, typeService TEXT CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_general_ci`, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, deleted_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE type_utilisateurs (id INT AUTO_INCREMENT NOT NULL, profil VARCHAR(225) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_general_ci`, created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, updated_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, deleted_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE websockets_statistics_entries (id INT UNSIGNED AUTO_INCREMENT NOT NULL, app_id VARCHAR(191) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, peak_connection_count INT NOT NULL, websocket_message_count INT NOT NULL, api_message_count INT NOT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE collectes (id INT AUTO_INCREMENT NOT NULL, montant INT NOT NULL, reseau VARCHAR(191) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_general_ci`, IdProjet INT NOT NULL, status VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_general_ci`, created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, updated_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, deleted_at DATETIME DEFAULT NULL, INDEX IdProjet (IdProjet), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE liker (id INT AUTO_INCREMENT NOT NULL, IdUser INT NOT NULL, IdProposIdee INT NOT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, INDEX IdProposIdee (IdProposIdee), INDEX IdUser (IdUser), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE commenter (id INT AUTO_INCREMENT NOT NULL, description TEXT CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_general_ci`, IdUser INT NOT NULL, IdProposIdee INT NOT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, deleted_at DATETIME DEFAULT NULL, INDEX IdProposIdee (IdProposIdee), INDEX IdUser (IdUser), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE mappings (id INT AUTO_INCREMENT NOT NULL, nomProprietaire VARCHAR(191) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_general_ci`, prenomProprietaire VARCHAR(191) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_general_ci`, numTel VARCHAR(191) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_general_ci`, image VARCHAR(191) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_general_ci`, nomEntreprise VARCHAR(191) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_general_ci`, descripActivite TEXT CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_general_ci`, jsonDonnee LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_bin`, latitude VARCHAR(191) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_general_ci`, longitude VARCHAR(191) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_general_ci`, IdResidant INT DEFAULT NULL, IdCategorie INT NOT NULL, IdCommune INT NOT NULL, IdUser INT NOT NULL, created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, updated_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, deleted_at DATETIME DEFAULT NULL, INDEX IdCategorie (IdCategorie), INDEX IdUser (IdUser), INDEX IdResidant (IdResidant), INDEX IdCommune (IdCommune), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE place_parkings (id INT AUTO_INCREMENT NOT NULL, codePlace VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_general_ci`, status VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_general_ci`, IdParking INT NOT NULL, created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, updated_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, deleted_at DATETIME DEFAULT NULL, INDEX IdParking (IdParking), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE votes (id INT AUTO_INCREMENT NOT NULL, IdUser INT NOT NULL, IdOption INT NOT NULL, created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, updated_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, deleted_at DATETIME DEFAULT NULL, INDEX IdOption (IdOption), INDEX IdUser (IdUser), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE informations (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(191) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_general_ci`, description TEXT CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_general_ci`, image VARCHAR(191) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_general_ci`, IdTypeInformation INT NOT NULL, IdUser INT NOT NULL, IdCommune INT NOT NULL, created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, updated_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, deleted_at DATETIME DEFAULT NULL, INDEX IdTypeInformations (IdTypeInformation), INDEX IdCommune (IdCommune), INDEX IdUser (IdUser), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE options (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(191) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_general_ci`, point INT DEFAULT NULL, IdSondage INT NOT NULL, created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, updated_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, deleted_at DATETIME DEFAULT NULL, INDEX IdSondage (IdSondage), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE participer (id INT AUTO_INCREMENT NOT NULL, IdCollecte INT NOT NULL, IdUser INT NOT NULL, created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, updated_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, INDEX IdCollecte (IdCollecte), INDEX IdUser (IdUser), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE projets (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(191) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_general_ci`, description TEXT CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_general_ci`, IdCommune INT NOT NULL, IdUser INT NOT NULL, created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, updated_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, deleted_at DATETIME DEFAULT NULL, INDEX IdCommune (IdCommune), INDEX IdUser (IdUser), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE preferences ADD CONSTRAINT preferences_ibfk_1 FOREIGN KEY (IdUser) REFERENCES users (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE preferences ADD CONSTRAINT preferences_ibfk_2 FOREIGN KEY (IdTypeInformation) REFERENCES type_informations (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE paiements ADD CONSTRAINT paiements_ibfk_1 FOREIGN KEY (IdReservation) REFERENCES reservations (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE problemes ADD CONSTRAINT problemes_ibfk_1 FOREIGN KEY (IdUser) REFERENCES users (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE problemes ADD CONSTRAINT problemes_ibfk_2 FOREIGN KEY (IdTypeProbleme) REFERENCES type_problemes (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE proposition_idees ADD CONSTRAINT proposition_idees_ibfk_3 FOREIGN KEY (IdTheme) REFERENCES themes (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE proposition_idees ADD CONSTRAINT proposition_idees_ibfk_2 FOREIGN KEY (IdUser) REFERENCES users (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reagir ADD CONSTRAINT reagir_ibfk_1 FOREIGN KEY (IdUser) REFERENCES users (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reagir ADD CONSTRAINT reagir_ibfk_2 FOREIGN KEY (IdPropositionIdee) REFERENCES proposition_idees (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reservations ADD CONSTRAINT reservations_ibfk_1 FOREIGN KEY (IdUser) REFERENCES users (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reservations ADD CONSTRAINT reservations_ibfk_2 FOREIGN KEY (IdPlaceParking) REFERENCES place_parkings (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE role_permissions ADD CONSTRAINT role_permissions_ibfk_2 FOREIGN KEY (IdTypeUtilisateur) REFERENCES type_utilisateurs (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE role_permissions ADD CONSTRAINT role_permissions_ibfk_1 FOREIGN KEY (IdUser) REFERENCES users (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE service_adminis ADD CONSTRAINT service_adminis_ibfk_1 FOREIGN KEY (IdTypeService) REFERENCES type_services (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE service_adminis ADD CONSTRAINT service_adminis_ibfk_2 FOREIGN KEY (IdUser) REFERENCES users (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE signaler ADD CONSTRAINT signaler_ibfk_1 FOREIGN KEY (IdUser) REFERENCES users (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE signaler ADD CONSTRAINT signaler_ibfk_2 FOREIGN KEY (IdProposIdee) REFERENCES proposition_idees (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE sondages ADD CONSTRAINT sondages_ibfk_1 FOREIGN KEY (IdUser) REFERENCES users (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE collectes ADD CONSTRAINT collectes_ibfk_1 FOREIGN KEY (IdProjet) REFERENCES projets (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE liker ADD CONSTRAINT liker_ibfk_1 FOREIGN KEY (IdUser) REFERENCES users (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE liker ADD CONSTRAINT liker_ibfk_2 FOREIGN KEY (IdProposIdee) REFERENCES proposition_idees (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE commenter ADD CONSTRAINT commenter_ibfk_2 FOREIGN KEY (IdProposIdee) REFERENCES proposition_idees (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE commenter ADD CONSTRAINT commenter_ibfk_1 FOREIGN KEY (IdUser) REFERENCES users (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE mappings ADD CONSTRAINT mappings_ibfk_3 FOREIGN KEY (IdUser) REFERENCES users (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE mappings ADD CONSTRAINT mappings_ibfk_1 FOREIGN KEY (IdCommune) REFERENCES communes (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE mappings ADD CONSTRAINT mappings_ibfk_4 FOREIGN KEY (IdResidant) REFERENCES communes (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE mappings ADD CONSTRAINT mappings_ibfk_2 FOREIGN KEY (IdCategorie) REFERENCES categories (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE place_parkings ADD CONSTRAINT place_parkings_ibfk_1 FOREIGN KEY (IdParking) REFERENCES mappings (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE votes ADD CONSTRAINT votes_ibfk_1 FOREIGN KEY (IdOption) REFERENCES options (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE votes ADD CONSTRAINT votes_ibfk_2 FOREIGN KEY (IdUser) REFERENCES users (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE informations ADD CONSTRAINT informations_ibfk_1 FOREIGN KEY (IdTypeInformation) REFERENCES type_informations (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE informations ADD CONSTRAINT informations_ibfk_2 FOREIGN KEY (IdUser) REFERENCES users (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE options ADD CONSTRAINT options_ibfk_1 FOREIGN KEY (IdSondage) REFERENCES sondages (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE participer ADD CONSTRAINT participer_ibfk_1 FOREIGN KEY (IdCollecte) REFERENCES collectes (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE participer ADD CONSTRAINT participer_ibfk_2 FOREIGN KEY (IdUser) REFERENCES users (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE projets ADD CONSTRAINT projets_ibfk_2 FOREIGN KEY (IdUser) REFERENCES users (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE projets ADD CONSTRAINT projets_ibfk_1 FOREIGN KEY (IdCommune) REFERENCES communes (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE celestin DROP FOREIGN KEY FK_F86B7F20F7D3B5F7');
        $this->addSql('DROP TABLE bello');
        $this->addSql('DROP TABLE celestin');
        $this->addSql('DROP TABLE plage_horaire');
        $this->addSql('DROP TABLE messenger_messages');
        $this->addSql('ALTER TABLE parking DROP FOREIGN KEY FK_B237527A79F37AE5');
        $this->addSql('ALTER TABLE users ADD image VARCHAR(255) NOT NULL, ADD name TEXT DEFAULT NULL, ADD email VARCHAR(255) NOT NULL, ADD email_verified_at DATETIME DEFAULT NULL, ADD password VARCHAR(255) NOT NULL, ADD remember_token VARCHAR(100) DEFAULT NULL, ADD prenom TEXT NOT NULL, ADD phone VARCHAR(191) NOT NULL, ADD sexe VARCHAR(5) NOT NULL, ADD date_naissance DATE DEFAULT NULL, ADD lieu_naissance VARCHAR(191) DEFAULT NULL, ADD IdCommune INT NOT NULL, ADD IdTypeUtilisateur INT NOT NULL, ADD created_at DATETIME DEFAULT NULL, ADD last_login DATETIME DEFAULT \'0000-00-00 00:00:00\' NOT NULL, ADD otp VARCHAR(25) NOT NULL, ADD active TINYINT(1) DEFAULT 0 NOT NULL, ADD updated_at DATETIME DEFAULT NULL, ADD deleted_at DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE users ADD CONSTRAINT users_ibfk_1 FOREIGN KEY (IdTypeUtilisateur) REFERENCES type_utilisateurs (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE users ADD CONSTRAINT users_ibfk_2 FOREIGN KEY (IdCommune) REFERENCES communes (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('CREATE INDEX IdCommune ON users (IdCommune)');
        $this->addSql('CREATE INDEX IdTypeUtilisateur ON users (IdTypeUtilisateur)');
    }
}
