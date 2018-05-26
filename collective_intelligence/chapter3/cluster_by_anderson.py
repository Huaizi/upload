

from bicluster import Bicluster



class ClusterByAnderson():

	def __init__(self):
		pass

	def readfile(self, file_name):
		with open(file_name, "r") as file_loader:
			lines = [line for line in file_loader]
		keywords = lines[0].strip().split("\t")[1:]
		blogs = []
		data = []
		for line in lines[1:]:
			p = line.strip().split("\t")
			blogs.append(p[0])
			data.append([float(x) for x in p[1:]])
		return blogs, keywords, data

	def pearson_distance(self, v1, v2):
		 average1 = sum(v1) / len(v1)
		 average2 = sum(v2) / len(v2)
		 numerator = sum([(v1[i] - average1) * (v2[i] - average2) for i in range(len(v1))])
		 denominator = ((sum([(v1[i] - average1) ** 2 for i in range(len(v1))])) * (sum([(v2[i] - average2) ** 2 for i in range(len(v1))])))**0.5
		 if denominator == 0: return 0
		 return 1.0 - float(numerator) / float(denominator)

	












if __name__ == "__main__":
	cluster = ClusterByAnderson()
	print len(cluster.readfile("blogdata.txt")[2][0])
