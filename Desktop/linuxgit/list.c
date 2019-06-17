#include<stdio.h>
#include<stdlib.h>
#include<string.h>
#include<dirent.h>
#include<unistd.h>

//今天面试要写一个遍历目录的程序，没写出来，这里是回来写的	17/6/2019 11:30

int mlastpos(char* str,char chr); //有缺陷	//查找str当中chr出现的最后一次位置
int readFileList(char *basePath,int count);	//遍历给定文件名下所有文件，并一句count值缩进打印名称
void mlist_curfolder(void);			//遍历当前本文件所在目录名下文件，并打印信息

int main()
{
	mlist_curfolder();
	return 0;
}

int mlastpos(char* str,char chr) //有缺陷
{
	int pos = 0;
	if(str==NULL)
	{
		printf("str参数错误");
		return -1;
	}
	pos = strlen(str)-1;
	while(str[pos]!=chr && pos>-1)
	{
		pos--;
	}
	if(pos==-1)
		printf("str无chr字符");
	return pos;
}

int readFileList(char *basePath,int count)
{
	DIR *dir;
	struct dirent *ptr;
	char base[1000];

	if((dir=opendir(basePath))==NULL)
	{
		perror("Open dir error...");
		return -1;
	}

	while((ptr=readdir(dir))!=NULL)
	{
		if(strcmp(ptr->d_name,".")==0 || strcmp(ptr->d_name,"..")==0)
			continue;
		else if(ptr->d_type == 8)		//普通文件
		{
			printf("%*s",count," ");
			printf("file:%s\n",ptr->d_name);
		}
		else if(ptr->d_type ==10)		//链接文件
		{
			printf("%*s",count," ");
			printf("link file:%s\n",ptr->d_name);
		}
		else if(ptr->d_type == 4)		//目录文件
		{
			printf("%*s",count," ");
			printf("dir:%s\n",ptr->d_name);
			memset(base,'\0',sizeof(base));
			strcpy(base,basePath);
			strcat(base,"/");
			strcat(base,ptr->d_name);
			readFileList(base,count+4);
		}
	}
	closedir(dir);
	return 0;
}

void mlist_curfolder(void)
{
	DIR *dir;
	char basePath[1000];
	char* cur_pos = (char*)malloc(100);
	char* cur_name = NULL;
	int pos = 0;

	memset(basePath,'\0',sizeof(basePath));
	getcwd(basePath,999);

	strcpy(cur_pos,"The current dir is :");
	strcat(cur_pos,basePath);
	printf("%s\n",cur_pos);			//打印当前文件所在绝对目录名

	if((pos=mlastpos(basePath,'/'))!=-1)
	{
		pos++;
		cur_name = basePath+pos;
		printf("dir:%s\n",cur_name);	//打印当前文件所在目录名
		if(strlen(cur_name)<4)		//遍历目录
			readFileList(basePath,strlen(cur_name));
		else
			readFileList(basePath,strlen(cur_name)-4);
	}

	return ;
}


