@echo off

echo 'ʹ��ssh���ӣ����Ƚ���Կ���浽GIT�����,HTTP���ӸĶ�git url'

echo start git clone

git clone git@github.com:langnang-temp/vue-template.git ClientApp

echo 'git clone finish!'

rd ClientApp\.git /s /Q
rd ClientApp\.github /s /Q

pause