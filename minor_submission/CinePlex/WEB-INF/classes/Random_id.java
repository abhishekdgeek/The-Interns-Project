package library;
public class Random_id {

public int getId(int k)
{
String s="";
							for(int i=0;i<k;i++)
							{
								s+=(int)(Math.random()*9)+1;
								
							}
							int id=Integer.parseInt(s);
							return id;
}
}