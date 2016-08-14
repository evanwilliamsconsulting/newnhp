./vendor/bin/doctrine orm:generate-entities --generate-annotations --generate-methods --regenerate-entities -- ./module/Application/src/Application/Database/
./vendor/bin/doctrine orm:schema-tool:update --force
