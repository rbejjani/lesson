#!/bin/sh
# LESL Test
rsync --delete --exclude=.[a-z0-9]* -rtvzH ../lesson/ root@local.lesbg.com:/var/www/html/lesson-test
ssh -l root local.lesbg.com "cd /var/www/html/lesson-test/; patch -l -p0 < /srv/lesson-config-1.patch; chgrp apache ./ -Rh; chmod 640 ./ -R; chmod ug+X ./ -R;"

# LESL
rsync --delete --exclude=.[a-z0-9]* -rtvzH ../lesson/ root@local.lesbg.com:/var/www/html/lesson
ssh -l root local.lesbg.com "cd /var/www/html/lesson/; patch -l -p0 < /srv/lesson-config-1.patch; chgrp apache ./ -Rh; chmod 640 ./ -R; chmod ug+X ./ -R;"
rsync --delete --exclude=.[a-z0-9]* -rtvzH ../lesson/ root@lesloueizeh.com:/var/www/html/lesson
ssh -l root lesloueizeh.com "cd /var/www/html/lesson/; patch -l -p0 < /srv/lesson-config-1.patch; chgrp apache ./ -Rh; chmod 640 ./ -R; chmod ug+X ./ -R;"
