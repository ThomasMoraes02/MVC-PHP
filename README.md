# MVC-PHP

Iniciar servidor embutido apontando para pasta public:  php -S localhost:5252 -t public
No navegador: http://localhost:5252/listar-cursos.php

vendor/bin/doctrine dbal:run-sql 'INSERT INTO usuarios (email, senha) VALUEs ("thomas@gmail.com", "$argon2i$v=19$m=65536,t=4,p=1$TEhtOVY0YTFqMUV6VUM5Mg$yOvNdTbIfg6iGFWC2dbebIvInOPVg6JizouySNT9rRk");'