#include<stdio.h>
#include<stdlib.h>
#include<string.h>
#include<dirent.h>
#include<unistd.h>

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
	int count_copy;
	DIR *dir;
	struct dirent *ptr;
	char base[1000];

	if((dir=opendir(basePath))==NULL)
	{
		perror("Open dir error...");
		return -1;//exit(1);
	}

	while((ptr=readdir(dir))!=NULL)
	{
		if(strcmp(ptr->d_name,".")==0 || strcmp(ptr->d_name,"..")==0)
			continue;
		else if(ptr->d_type == 8)
		{
			count_copy = count;
			while(count_copy>0)
			{
				printf(" ");
				count_copy--;
			}
			printf("file:%s\n",ptr->d_name);
		}
		else if(ptr->d_type ==10)
		{
			count_copy = count;
			while(count_copy>0)
			{
				printf(" ");
				count_copy--;
			}
			printf("link file:%s\n",ptr->d_name);
		}
		else if(ptr->d_type == 4)
		{
			count_copy = count;
			while(count_copy>0)
			{
				printf(" ");
				count_copy--;
			}
			printf("dir:%s\n",ptr->d_name);
			memset(base,'\0',sizeof(base));
			strcpy(base,basePath);
			strcat(base,"/");
			strcat(base,ptr->d_name);
			readFileList(base,count+4);
		}
	}
	closedir(dir);
	return 1;
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
	printf("%s\n",cur_pos);

	if((pos=mlastpos(basePath,'/'))!=-1)
	{
		pos++;
		cur_name = basePath+pos;
		printf("dir:%s\n",cur_name);
		if(strlen(cur_name)<4)
			readFileList(basePath,strlen(cur_name));
		else
			readFileList(basePath,strlen(cur_name)-4);
	}

	return ;
}


int main()
{
	mlist_curfolder();
	return 0;
}
