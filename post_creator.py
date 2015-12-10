from wordpress_xmlrpc import WordPressPost
from wordpress_xmlrpc import Client
from wordpress_xmlrpc.methods import posts

data = ""

content = open("input.txt", "r")
lines = content.readlines()
url = lines[0].strip()+"xmlrpc.php"
username = lines[1].strip()
password = lines[2].strip()
title = lines[3].strip()
for i in range(4,len(lines)):
	data += lines[i].strip()

print data
client = Client(url, username, password)

#posts = client.call(posts.GetPosts())

post = WordPressPost()
post.title = title
post.content = data
post.id = client.call(posts.NewPost(post))

# whoops, I forgot to publish it!
post.post_status = 'publish'
client.call(posts.EditPost(post.id, post))
